# TP3
Ce travail consite en la création d'un système de gestion des dépots et retraits des clients d'une banque

1. Créer un nouveau repositori
2. ouvrir son projet dans vs_code
3. ouvrer le terminal gitbash
4. créer un dépot local grâce aux codes ci-dessous
	- git init (qui créer un dossier .git dans le même dossier que le dossier que nous avions ouvert)
	- git add .(pour spécifier que l'on veut ajouter tout)
	- git commit -m "commentaire" (pour ajouter un commentaire)

5. Associer son dépôt local à un dépôt en ligne
	- un click sur son repositori
	- un click sur l'icone code
	- un click sur l'icone de copy
	- revenir dans le terminal
	- taper la commande (avec le lien qui correspond au lien copier) :
		git remote add origin https://github.com/Bazene/TP3.git
	- uploder son code en ligne avec la commande ci-dessous (ci-dessous main veut dire master)
		git push -u origin master
