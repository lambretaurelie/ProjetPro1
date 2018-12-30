var app = angular.module("myModule", []);
app.controller("myController", function($scope, $http){
	$scope.carts=[];
	$http.get('assets/json/projet.json').then(function(result){
		$scope.products = result.data;
		// BOUTON AJOUTER DE LA VITRINE
		$scope.addCart = function(product){
			if(product){
				$scope.carts.push({
					productId: product.productId,
					productCategory: product.productCategory,
					productImage: product.productImage,
					productName: product.productName,
					productPrice: product.productPrice,
					productDesc: product.productDesc,
					productQt: product.productQt
				});
			}
		}
		// CALCUL DU TOTAL PANIER
		$scope.total = 0.00;
		$scope.setTotals = function(cart){
			if(cart){
				$scope.total += cart.productPrice;
			}
		}
		///////////////////// CALCUL DU PANIER //////////////////
		///////////////////// FONCTION DU PANIER //////////////////

		// BOUTON AJOUTER DU PANIER +
		$scope.addCartButton = function(product){
			product.productQt++;
			$scope.total += product.productPrice;
		}
		// BOUTON DIMINUER DU PANIER -
		// SI tant que la quantitée est supérieure à 1 je décrémente
		$scope.downCartButton = function(product){
			if(product.productQt > 1){
				product.productQt--;
				$scope.total -= product.productPrice;
				// Sinon si la quantitée est inférieure à 1 je la supprime du panier
			}else{
				$scope.remove_cart(product);
			}
		}
		// BOUTON POUR SUPPRIMER L'ARTICLE X
		$scope.removeCart = function(cart){
			if(cart){
				$scope.carts.splice($scope.carts.indexOf(cart), 1);
				($scope.total -= cart.productPrice * cart.productQt).toFixed(2);
			}
			if(!cart){
				$scope.total = 0;
			}
		}
		///////////////////// VERIFICATION FORMULAIRE //////////////////
		// Vérification du Nom et prenom minimum 3 caractères et maximum 30
		$scope.firstName_add = /^[\w\-]{3,30}$/;
		$scope.lastName_add = /^[\w\-]{3,30}$/;
		// Vérification de l'email
		$scope.mail_add = /^[^\s@]+@[^\s@]+\.[^\s@]{2,3}$/;
		// Vérification du sujet du message
		$scope.object_add = /^[\w\-\s]{3,60}$/;
		// Vérification du numéro de téléphone
		$scope.phone_add = /^0[1-9][0-9]{8}$/;
		// Initialisation de notre objet this pour la récupération des informations transmises
		let skull = this;
		// Initialisation d'un tableau vide par défaut
		skull.shows = [];
		// Fonctions d'ajout dans notre tableau
		skull.addShow = function() {
			skull.shows.push(skull.new);
			skull.new = {};
		};
	});
});
