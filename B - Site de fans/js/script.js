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
        var countItems = item.val();
        var nameItem = item.attr('name');
        var idItem = item.attr('id');
        var idItemPanier = $('#' + idItem + '-panier');
        if(countItems>0){
            var price = parseFloat($('.' + idItem).text().replace('€', ''));
            if(idItemPanier.length){
                idItemPanier.text(nameItem + " " + countItems);
            }else{
                $('#total-panier').prepend(function () {
                    return "<p id=\"" + idItem + "-panier\">" + nameItem + " " + countItems + "</p>";
                });
            }
            $('#' + idItem + '-panier').append(function () {
                return "<span class=\"money\">" + price*countItems + "€</span>";
            });
        } else {
            if(idItemPanier.length){
                idItemPanier.text("");
            }
        }
        
        // Met à jour le sous-total
        var elementsTotal = $('.money').text().split('€');
        var subtotal = 0, total = 0, livraison = 0;
        for(var i = 0; i < elementsTotal.length-1; i++){
            subtotal+=parseFloat(elementsTotal[i]);
        }
        subtotal = Math.round(subtotal*100)/100;
        $('#subtotal').text(subtotal+'€');
	
        // Met à jour les frais de livraisons
        if(subtotal <= 0){
        } else if(subtotal <= 15){
            livraison = 10;
        } else if (subtotal <= 30) {
            livraison = 7;
        }
        total = Math.round((subtotal + livraison)*100)/100;
        $('#livraison').text(livraison+'€');
        $('#total').text(total+'€');
    });

    $(function () {
        $('[data-toggle="popover"]').popover()
    });
  
});
