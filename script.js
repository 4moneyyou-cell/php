function toggleMenu(){document.getElementById("navLinks").classList.toggle("open")}
document.querySelectorAll("#navLinks a").forEach(a=>a.addEventListener("click",()=>document.getElementById("navLinks").classList.remove("open")));
document.getElementById("year").textContent=new Date().getFullYear();
document.getElementById("enquiryForm").addEventListener("submit",function(e){
 e.preventDefault();
 document.getElementById("message").textContent="Thank you. Your enquiry has been received. Please connect this form to your PHP/email backend for live lead submission.";
 this.reset();
});
