const s=document.querySelector("#half-stars-example .rating-group"),n=s.querySelectorAll(".rating__label");n.forEach((t,r)=>{t.addEventListener("mouseover",()=>{const o=Array.from(n).slice(0,r+1);n.forEach(e=>e.classList.remove("hovered")),o.forEach(e=>e.classList.add("hovered"))}),s.addEventListener("mouseout",i),t.addEventListener("mousedown",c)});function i(){n.forEach(t=>t.classList.remove("hovered"))}function c(t){let r=t.target.parentElement.attributes["aria-label"].nodeValue;const o=document.querySelector('meta[name="csrf-token"]').getAttribute("content");fetch(`/listings/${listingId}/review`,{method:"POST",headers:{"Content-Type":"application/json","X-CSRF-TOKEN":o},body:JSON.stringify({rating_value:r})}).then(e=>e.text()).then(e=>{let l=document.getElementById(`rating_${listingId}`);l.innerHTML=e,document.querySelectorAll(".rating__label").forEach(function(a){a.getAttribute("aria-label")<=r&&a.classList.add("hovered")})}).catch(e=>{alert("Something went wrong"),console.error("Error:",e)})}