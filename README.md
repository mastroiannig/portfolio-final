# installer git 

https://git-scm.com/


# installation de node js

Prendre la version LTS

https://nodejs.org/en/download

ne rien cocher sauf confid

# installation de sass

dans le terminal

```npm install -g sass```

si message : npm : Impossible de charger le fichier C:\Program Files\nodejs\npm.ps1, car l’exécution de scripts est désactivée sur
ce système. Pour plus d’informations, consultez about_Execution_Policies à l’adresse

```Set-ExecutionPolicy -ExecutionPolicy RemoteSigned -Scope CurrentUser```

puis npm install -g sass


# installer chez toi

ouvrir un terminal sur le dossier PHP
```git clone https://github.com/mastroiannig/portfolio-final.git```

## sauvegarder

```git add .```

```git commit -m "message"```

```git push```

## pour récup

```git pull```

# démarrer sass

```sass ./assets/style.scss ./build/style.css --style=compressed --watch```
