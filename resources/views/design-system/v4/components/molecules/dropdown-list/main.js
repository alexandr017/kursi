let dropdownLists = document.querySelectorAll('.dropdown-list');
if(dropdownLists!==null){
    dropdownLists.forEach((dropdownList) => {
        let options = dropdownList.querySelectorAll('.option');
        options.forEach((option) => {
            option.addEventListener('click', function (){
                if(!option.classList.contains('disabled')){
                    options.forEach(item => item.classList.remove('selected'));
                    option.classList.add('selected');
                }
            });
        });
    });
}
console.log('dropdown-list included');
