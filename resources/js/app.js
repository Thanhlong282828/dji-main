import '../ts/schema.ts';

document.documentElement.classList.add('js');
const observer=new IntersectionObserver(entries=>entries.forEach(entry=>{if(entry.isIntersecting){entry.target.classList.add('visible');observer.unobserve(entry.target)}}),{threshold:.12});
document.querySelectorAll('.reveal').forEach(element=>observer.observe(element));
window.addEventListener('scroll',()=>{const hero=document.querySelector('.hero');if(hero)hero.style.backgroundPosition=`center ${window.scrollY*.18}px`},{passive:true});
const nav=document.querySelector('[data-nav]');
const menu=document.querySelector('.menu');
const mobilePanel=document.querySelector('.mobile-panel');
window.addEventListener('scroll',()=>nav?.classList.toggle('scrolled',window.scrollY>24),{passive:true});
menu?.addEventListener('click',()=>{const open=mobilePanel?.classList.toggle('open')??false;menu.setAttribute('aria-expanded',String(open));mobilePanel?.setAttribute('aria-hidden',String(!open));});
document.querySelectorAll('.mobile-panel a').forEach(link=>link.addEventListener('click',()=>{mobilePanel?.classList.remove('open');menu?.setAttribute('aria-expanded','false')}));
