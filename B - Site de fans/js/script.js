$(document).ready(function(){
    var $nom = $('.nom');
    var $prenom = $('.prenom');
    var $mail = $('.mail');
    var $envoi = $('.envoi');
    var $reset = $('#rafraichir');
    var $erreur = $('#erreur');
    var $champ = $('.form-contact');
    $nom.focusout(function(){
        if($(this).val() == ""||$(this).val() == null){
            $(this).css({ // on rend le champ rouge
                borderColor : 'red',
            color : 'red'
            });
            alert("ce champ doit être renseigné");
         }
         else{
             $(this).css({ // si tout est bon, on le rend vert
             borderColor : 'green',
             color : 'green'
         });
         }
    });
    $prenom.focusout(function(){
      console.log("focusout");
        if($(this).val() == "" || $(this).val() == null){
            $(this).css({ // on rend le champ rouge
                borderColor : 'red',
            color : 'red',
            });
           alert("ce champ doit être renseigné");
        }
        else{
        $(this).css({ // si tout est bon, on le rend vert
            borderColor : 'green',
            color : 'green'
        });
        }
    });
    $mail.focusout(function(){
        if($(this).val() == "" || $(this).val() == null){
            $(this).css({ // on rend le champ rouge
                borderColor : 'red',
            color : 'red'
            });
         alert("ce champ doit être renseigné");
        }
        else{
        $(this).css({ // si tout est bon, on le rend vert
            borderColor : 'green',
            color : 'green'
        });
        }
    });
    $envoi.click(function(e){
        e.preventDefault(); // on annule la fonction par défaut du bouton d'envoi
      // puis on lance la fonction de vérification sur tous les champs :
        verifier($nom);
        verifier($prenom);
        verifier($mail);
    });
    $reset.click(function(){
        $champ.css({ // on remet le style des champs comme on l'avait défini dans le style CSS
            borderColor : '#ccc',
            color : '#555'
        });
        $erreur.css('display', 'none'); // on prend soin de cacher le message d'erreur
    });
    function verifier(champ){
        if(champ.val() == null){ // si le champ est vide
            $erreur.css('display', 'block'); // on affiche le message d'erreur
            champ.css({ // on rend le champ rouge
                borderColor : 'red',
                color : 'red'
            });
        }
    }
  
	$('#left-radius').click(function () {
		$('body').css('background-image', 'url(images/village.jpeg)');
	});
	$('ul.nav-tabs>li').slice(1).click(function () {
		$('body').css('background-image', 'url(img/village2.jpg)');
	});

	$('.shop-item').change(function () {
		var item = $(this);
		var nameItem = item.attr('name');
		$('#total-panier').append(function (n) {
			return "<p>" + item.val() + " " + nameItem + "</p>";
		});
	});
  
});
