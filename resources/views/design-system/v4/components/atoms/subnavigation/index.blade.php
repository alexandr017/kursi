<?php
//includeComponent('components/atoms/button');
includeComponent('components/atoms/button-icon');
includeComponent('components/atoms/subnavigation');
?>
<div class="container">
    <div class="row" style="padding-top: 20px; gap: 20px">
        <button class="btn btn-icon btn-filter">
            <svg class="bi bi-filter" width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.7533 13.9973C12.7533 13.4976 12.9483 13.0183 13.2953 12.6649C13.6424 12.3116 14.1131 12.113 14.6039 12.113C15.0948 12.113 15.5655 12.3116 15.9125 12.6649C16.2596 13.0183 16.4546 13.4976 16.4546 13.9973C16.4546 14.4971 16.2596 14.9764 15.9125 15.3297C15.5655 15.6831 15.0948 15.8816 14.6039 15.8816C14.1131 15.8816 13.6424 15.6831 13.2953 15.3297C12.9483 14.9764 12.7533 14.4971 12.7533 13.9973ZM12.7533 13.9973C9.13965 13.9973 3.5 13.9973 3.5 13.9973M7.24673 7.35898C7.24673 7.85873 7.05175 8.33801 6.70468 8.69139C6.35762 9.04476 5.8869 9.24329 5.39607 9.24329C4.90525 9.24329 4.43453 9.04476 4.08747 8.69139C3.7404 8.33801 3.54542 7.85873 3.54542 7.35898C3.54542 6.85924 3.7404 6.37996 4.08747 6.02658C4.43453 5.6732 4.90525 5.47468 5.39607 5.47468C5.8869 5.47468 6.35762 5.67321 6.70468 6.02658C7.05175 6.37996 7.24673 6.85924 7.24673 7.35898ZM7.24673 7.35898C10.8604 7.35898 16.5 7.35898 16.5 7.35898" stroke="#141414" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span class="btn-text">Фильтры</span>
            <span class="counter">19</span>
        </button>
        <button class="btn btn-icon btn-filter" disabled>
            <svg class="bi bi-filter" width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.7533 13.9973C12.7533 13.4976 12.9483 13.0183 13.2953 12.6649C13.6424 12.3116 14.1131 12.113 14.6039 12.113C15.0948 12.113 15.5655 12.3116 15.9125 12.6649C16.2596 13.0183 16.4546 13.4976 16.4546 13.9973C16.4546 14.4971 16.2596 14.9764 15.9125 15.3297C15.5655 15.6831 15.0948 15.8816 14.6039 15.8816C14.1131 15.8816 13.6424 15.6831 13.2953 15.3297C12.9483 14.9764 12.7533 14.4971 12.7533 13.9973ZM12.7533 13.9973C9.13965 13.9973 3.5 13.9973 3.5 13.9973M7.24673 7.35898C7.24673 7.85873 7.05175 8.33801 6.70468 8.69139C6.35762 9.04476 5.8869 9.24329 5.39607 9.24329C4.90525 9.24329 4.43453 9.04476 4.08747 8.69139C3.7404 8.33801 3.54542 7.85873 3.54542 7.35898C3.54542 6.85924 3.7404 6.37996 4.08747 6.02658C4.43453 5.6732 4.90525 5.47468 5.39607 5.47468C5.8869 5.47468 6.35762 5.67321 6.70468 6.02658C7.05175 6.37996 7.24673 6.85924 7.24673 7.35898ZM7.24673 7.35898C10.8604 7.35898 16.5 7.35898 16.5 7.35898" stroke="#141414" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span class="btn-text">Фильтры</span>
            <span class="counter">2</span>
        </button>
    </div>
    <hr>
    <div class="row" style="padding-top: 20px; gap: 20px">
        <button class="btn btn-icon btn-sort">
            <svg class="bi bi-sort" width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.26532 15.2195V5.13678M6.26532 5.13678L3.74463 7.65747M6.26532 5.13678L8.78601 7.65747M13.7347 5.13678L13.7347 15.2195M13.7347 15.2195L16.2554 12.6989M13.7347 15.2195L11.214 12.6989" stroke="#141414" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span class="btn-text">Популярные</span>
        </button>
        <button class="btn btn-icon btn-sort" disabled>
            <svg class="bi bi-sort" width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.26532 15.2195V5.13678M6.26532 5.13678L3.74463 7.65747M6.26532 5.13678L8.78601 7.65747M13.7347 5.13678L13.7347 15.2195M13.7347 15.2195L16.2554 12.6989M13.7347 15.2195L11.214 12.6989" stroke="#141414" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span class="btn-text">Популярные</span>
        </button>
        <button class="btn btn-icon btn-sort" disabled>
            <svg class="bi bi-sort" width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.26532 15.2195V5.13678M6.26532 5.13678L3.74463 7.65747M6.26532 5.13678L8.78601 7.65747M13.7347 5.13678L13.7347 15.2195M13.7347 15.2195L16.2554 12.6989M13.7347 15.2195L11.214 12.6989" stroke="#141414" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span class="btn-text">Популярные</span>
        </button>
        <button class="btn btn-icon btn-sort" disabled>
            <svg class="bi bi-sort" width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.26532 15.2195V5.13678M6.26532 5.13678L3.74463 7.65747M6.26532 5.13678L8.78601 7.65747M13.7347 5.13678L13.7347 15.2195M13.7347 15.2195L16.2554 12.6989M13.7347 15.2195L11.214 12.6989" stroke="#141414" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span class="btn-text">Популярные</span>
        </button>
        <button class="btn btn-icon btn-sort" disabled>
            <svg class="bi bi-sort" width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.26532 15.2195V5.13678M6.26532 5.13678L3.74463 7.65747M6.26532 5.13678L8.78601 7.65747M13.7347 5.13678L13.7347 15.2195M13.7347 15.2195L16.2554 12.6989M13.7347 15.2195L11.214 12.6989" stroke="#141414" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span class="btn-text">Популярные</span>
        </button>
    </div>
</div>

