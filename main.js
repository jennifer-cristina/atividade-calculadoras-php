'use strict'

const menuBurguer = document.getElementById('checkbox-menu')
const balao = document.getElementById('container-balao')

function toggleMenu() {
    const nav = document.getElementById('nav')
    nav.classList.toggle('active');
    console.log('teste')
}

menuBurguer.addEventListener('click', toggleMenu)

function carregar() {
    document.getElementById("container-balao").style.opacity = 1;
}