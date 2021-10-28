
function openForm() {
  document.getElementById("myForm").style.display = "block";
  document.getElementById("page").style.opacity = "0.3";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
  document.getElementById("page").style.opacity = "1";
  document.location.reload();
}

function validerInscription()
{
    alert("Inscription Réussie\n Vous pouvez vous connecter maintenant !");
}
