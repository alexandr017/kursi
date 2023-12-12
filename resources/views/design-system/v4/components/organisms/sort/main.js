let sortBtn = document.querySelectorAll('.sort-container')[0];
if (sortBtn!==null) {
    let sortStatus = sortBtn.querySelector('.sort-status');
    let sortItems = sortBtn.querySelectorAll('.sort-body .option');
    window.isMobScreen = false;

    sortBtn.addEventListener('click', function () {
        window.isMobScreen = document.documentElement.clientWidth <= 767;
        if (!window.isMobScreen) {
            sortBtn.classList.toggle('open');
        }
    })

    sortItems.forEach((sortItem) => {
        sortItem.addEventListener('click', function () {
            let hiddenSortItems = sortBtn.querySelectorAll('.draggable-content .option');
            let sortItemStatus = sortItem.innerHTML;

            sortStatus.innerHTML = sortItemStatus;

            hiddenSortItems.forEach(item => item.classList.remove('selected'));
            setSelectedSort(hiddenSortItems, sortItemStatus);
        });
    });

    initDragBlock(sortBtn, ()=>{},'select');
}


function initDragBlock(selectBlock, callbackSelected, type) {
    let overlaySwipe = selectBlock.querySelector('.overlay-swipe');
    let draggableBlock = selectBlock.querySelector('.draggable-block');

    if (type === 'multiselect' && selectBlock.querySelector('.select-options') == null) {
        // initDragBlockCheckboxes(selectBlock, callbackSelected);
    } else if (type === 'select')  {
        initDragBlockRadio(selectBlock, callbackSelected);
    } else {
        return;
    }

    selectBlock.addEventListener('click', (e) => {
        if ( draggableBlock.classList.contains('show') ||
            e.target.closest('button') ||
            e.target.closest('.overlay-swipe') ) {
            return;
        } else if (window.isMobScreen) {
            draggableBlock.classList.add('show');
            overlaySwipe.classList.add('active');
        }
    })

    overlaySwipe.addEventListener('click', (e) => {
        if (e.target !== draggableBlock && !e.target.closest('.draggable-block')) {
            draggableBlock.classList.remove('show');
            overlaySwipe.classList.remove('active');
        }
    })

    setDraggableBlock(draggableBlock, overlaySwipe);
}

function setDraggableBlock(draggableBlock, overlaySwipe) {
    let dragItem = draggableBlock;
    let container = draggableBlock.closest('.overlay-swipe');

    let active = false;
    let currentY;
    let initialY;
    let yOffset = 0;

    container.addEventListener("touchstart", dragStart, false);
    container.addEventListener("touchend", dragEnd, false);
    container.addEventListener("touchmove", drag, false);

    container.addEventListener("mousedown", dragStart, false);
    container.addEventListener("mouseup", dragEnd, false);
    container.addEventListener("mousemove", drag, false);

    function dragStart(e) {
        if (e.type === "touchstart") {
            initialY = e.touches[0].clientY - yOffset;
        } else {
            initialY = e.clientY - yOffset;
        }

        if (e.target === dragItem || e.target.closest('.draggable-block')) {
            active = true;
        }
    }

    function dragEnd(e) {
        if (yOffset > 20) {
            draggableBlock.classList.remove('show');
            overlaySwipe.classList.remove('active');
        }

        currentY = null;
        initialY = null;
        yOffset = 0;

        dragItem.classList.remove('dragged');
        dragItem.style.transform = null;
        dragItem.style.paddingBottom = null;
        active = false;
    }

    function drag(e) {
        let contentBlock = e.target.closest('.draggable-content');

        let contentBlockIsScrolled = contentBlock && contentBlock.scrollHeight > contentBlock.offsetHeight;

        if (active && !contentBlockIsScrolled) {
            e.preventDefault();

            if (e.type === "touchmove") {
                currentY = e.touches[0].clientY - initialY;
            } else {
                currentY = e.clientY - initialY;
            }

            yOffset = currentY;

            setTranslate(currentY, dragItem);
        }
    }

    function setTranslate(yPos, el) {
        el.classList.add('dragged');
        if (yPos < 0) {
            el.style.paddingBottom = (Math.abs(yPos) / 5) + 'px';
        } else {
            el.style.transform = 'translateY(' + yPos / 5 + 'px)';
        }
    }
}

function initDragBlockRadio(selectBlock, callbackSelected) {
    let sortStatus = selectBlock.querySelector('.sort-status');
    let hiddenSortItems = selectBlock.querySelectorAll('.dropdown-list .option');

    selectBlock.querySelectorAll('.draggable-content .option').forEach((item ,index, items) => {
        item.addEventListener('click', (e) => {
            let overlaySwipe = selectBlock.querySelector('.overlay-swipe');
            let draggableBlock = selectBlock.querySelector('.draggable-block');

            let itemSortStatus = item.innerHTML;

            hiddenSortItems.forEach(item => item.classList.remove('selected'));
            setSelectedSort(hiddenSortItems, itemSortStatus);

            if (item.dataset.onSelectedValue) {
                sortStatus.innerHTML = item.dataset.onSelectedValue;
            } else {
                sortStatus.innerHTML = itemSortStatus;
            }

            draggableBlock.classList.remove('show');
            overlaySwipe.classList.remove('active');
        })
    })
}

function setSelectedSort(items, status) {
    items.forEach((item) => {
        if (status == item.innerHTML) {
            item.classList.add('selected');
        }
    });
}

