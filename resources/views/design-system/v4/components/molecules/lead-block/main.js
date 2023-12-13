
let leadBlock = document.querySelectorAll('.lead-block')[0];
if(leadBlock!==null){
    let btnOpenLead = leadBlock.querySelector('.btn-lead-open');
    let btnCloseLead = leadBlock.querySelector('.btn-lead-close');
    let leadBlockText = leadBlock.querySelector('.lead-block_header-text');

    btnOpenLead.addEventListener('click', ()=>{
        leadBlockText.classList.add('open');
        btnOpenLead.classList.add('hidden');
        btnCloseLead.classList.remove('hidden');
    });
    btnCloseLead.addEventListener('click', ()=>{
        leadBlockText.classList.remove('open');
        btnCloseLead.classList.add('hidden');
        btnOpenLead.classList.remove('hidden');
    });
}

