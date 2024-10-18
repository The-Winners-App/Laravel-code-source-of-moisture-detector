//Script pour faire a ce que des que un text se termine par un point le prochain commence a la ligne de la vu detail.blade.php

const text = document.querySelector('.details');
const textContent = text.textContent;

const newText = textContent.replace(/\./g,'.<br> <div style="margin-top: 3%;"></div>');

text.innerHTML = newText;

const texte = document.querySelector('.detail');
const textContente = texte.textContent;

const newTexte = textContente.replace(/\./g,'.<br> <div style="margin-top: 3%;"></div>');

texte.innerHTML = newTexte;

const textes = document.querySelector('.detai');
const textContentes = textes.textContent;

const newTextes = textContentes.replace(/\./g,'.<br> <div style="margin-top: 3%;"></div>');

textes.innerHTML = newTextes;



