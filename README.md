CustomerCareAPI
===============

Description
-----------

CustomerCareAPI est une API avancée développée en Laravel pour la gestion d’un service client. Elle permet de gérer les tickets d’assistance, d’attribuer des demandes aux agents, de suivre l’état des requêtes et de fournir un historique des interactions. Cette API REST suit les bonnes pratiques de développement et d’architecture, et peut être consommée via n’importe quel framework JavaScript (Vue.js, React, Angular, etc.).

Fonctionnalités principales
---------------------------

*   Gestion des tickets d’assistance (création, mise à jour, suppression, suivi, fermeture).
    
*   Attribution des tickets aux agents.
    
*   Suivi de l’historique des interactions.
    
*   Authentification et autorisation sécurisées avec Laravel Sanctum.
    
*   Documentation API avec Swagger.
    
*   Tests unitaires et fonctionnels avec PHPUnit.
    
*   Gestion avancée des requêtes API (pagination, filtres, tri).
    
*   Interface frontend pour consommer l’API.
    

Installation et Configuration
-----------------------------

### Prérequis

Avant de commencer, assurez-vous d’avoir installé les outils suivants :

*   **PHP (>=10.0)**
    
*   **Composer**
    
*   **Laravel (>=12.0)**
    
*   **PostgreSQL**
    
*   **React.js & npm (si vous souhaitez tester avec un frontend)**
    
*   **Git**
    

### Étapes d’installation

#### 1\. Cloner le projet

Plain textANTLR4BashCC#CSSCoffeeScriptCMakeDartDjangoDockerEJSErlangGitGoGraphQLGroovyHTMLJavaJavaScriptJSONJSXKotlinLaTeXLessLuaMakefileMarkdownMATLABMarkupObjective-CPerlPHPPowerShell.propertiesProtocol BuffersPythonRRubySass (Sass)Sass (Scss)SchemeSQLShellSwiftSVGTSXTypeScriptWebAssemblyYAMLXML`   git@github.com:Youcode-Classe-E-2024-2025/chaima_elomrani_CustomerCareAPI.git  cd CustomerCareAPI   `

#### 2\. Installer les dépendances PHP

Plain textANTLR4BashCC#CSSCoffeeScriptCMakeDartDjangoDockerEJSErlangGitGoGraphQLGroovyHTMLJavaJavaScriptJSONJSXKotlinLaTeXLessLuaMakefileMarkdownMATLABMarkupObjective-CPerlPHPPowerShell.propertiesProtocol BuffersPythonRRubySass (Sass)Sass (Scss)SchemeSQLShellSwiftSVGTSXTypeScriptWebAssemblyYAMLXML`   composer install   `

#### 3\. Créer et configurer le fichier .env

Plain textANTLR4BashCC#CSSCoffeeScriptCMakeDartDjangoDockerEJSErlangGitGoGraphQLGroovyHTMLJavaJavaScriptJSONJSXKotlinLaTeXLessLuaMakefileMarkdownMATLABMarkupObjective-CPerlPHPPowerShell.propertiesProtocol BuffersPythonRRubySass (Sass)Sass (Scss)SchemeSQLShellSwiftSVGTSXTypeScriptWebAssemblyYAMLXML`   cp .env.example .env   `

Modifiez ensuite votre base de données dans .env :

Plain textANTLR4BashCC#CSSCoffeeScriptCMakeDartDjangoDockerEJSErlangGitGoGraphQLGroovyHTMLJavaJavaScriptJSONJSXKotlinLaTeXLessLuaMakefileMarkdownMATLABMarkupObjective-CPerlPHPPowerShell.propertiesProtocol BuffersPythonRRubySass (Sass)Sass (Scss)SchemeSQLShellSwiftSVGTSXTypeScriptWebAssemblyYAMLXML`DB_CONNECTION=pgsql  DB_HOST=127.0.0.1  DB_PORT=5432  DB_DATABASE=CustomerCare  DB_USERNAME=postgres  DB_PASSWORD=root` 

#### 4\. Générer la clé d’application

Plain textANTLR4BashCC#CSSCoffeeScriptCMakeDartDjangoDockerEJSErlangGitGoGraphQLGroovyHTMLJavaJavaScriptJSONJSXKotlinLaTeXLessLuaMakefileMarkdownMATLABMarkupObjective-CPerlPHPPowerShell.propertiesProtocol BuffersPythonRRubySass (Sass)Sass (Scss)SchemeSQLShellSwiftSVGTSXTypeScriptWebAssemblyYAMLXML`   php artisan key:generate   `

#### 5\. Exécuter les migrations et seeders

Plain textANTLR4BashCC#CSSCoffeeScriptCMakeDartDjangoDockerEJSErlangGitGoGraphQLGroovyHTMLJavaJavaScriptJSONJSXKotlinLaTeXLessLuaMakefileMarkdownMATLABMarkupObjective-CPerlPHPPowerShell.propertiesProtocol BuffersPythonRRubySass (Sass)Sass (Scss)SchemeSQLShellSwiftSVGTSXTypeScriptWebAssemblyYAMLXML`   php artisan migrate --seed   `

#### 6\. Installer Laravel Sanctum

Plain textANTLR4BashCC#CSSCoffeeScriptCMakeDartDjangoDockerEJSErlangGitGoGraphQLGroovyHTMLJavaJavaScriptJSONJSXKotlinLaTeXLessLuaMakefileMarkdownMATLABMarkupObjective-CPerlPHPPowerShell.propertiesProtocol BuffersPythonRRubySass (Sass)Sass (Scss)SchemeSQLShellSwiftSVGTSXTypeScriptWebAssemblyYAMLXML`   php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"  php artisan migrate   `

#### 7\. Démarrer le serveur

Plain textANTLR4BashCC#CSSCoffeeScriptCMakeDartDjangoDockerEJSErlangGitGoGraphQLGroovyHTMLJavaJavaScriptJSONJSXKotlinLaTeXLessLuaMakefileMarkdownMATLABMarkupObjective-CPerlPHPPowerShell.propertiesProtocol BuffersPythonRRubySass (Sass)Sass (Scss)SchemeSQLShellSwiftSVGTSXTypeScriptWebAssemblyYAMLXML`   php artisan serve   `

L’API sera accessible sur http://127.0.0.1:8000

Documentation API avec Swagger
------------------------------

#### 1\. Installation de Swagger

Plain textANTLR4BashCC#CSSCoffeeScriptCMakeDartDjangoDockerEJSErlangGitGoGraphQLGroovyHTMLJavaJavaScriptJSONJSXKotlinLaTeXLessLuaMakefileMarkdownMATLABMarkupObjective-CPerlPHPPowerShell.propertiesProtocol BuffersPythonRRubySass (Sass)Sass (Scss)SchemeSQLShellSwiftSVGTSXTypeScriptWebAssemblyYAMLXML`   composer require darkaonline/l5-swagger   `

#### 2\. Publier la configuration

Plain textANTLR4BashCC#CSSCoffeeScriptCMakeDartDjangoDockerEJSErlangGitGoGraphQLGroovyHTMLJavaJavaScriptJSONJSXKotlinLaTeXLessLuaMakefileMarkdownMATLABMarkupObjective-CPerlPHPPowerShell.propertiesProtocol BuffersPythonRRubySass (Sass)Sass (Scss)SchemeSQLShellSwiftSVGTSXTypeScriptWebAssemblyYAMLXML`   php artisan vendor:publish --provider "L5Swagger\L5SwaggerServiceProvider"   `

#### 3\. Générer la documentation

Plain textANTLR4BashCC#CSSCoffeeScriptCMakeDartDjangoDockerEJSErlangGitGoGraphQLGroovyHTMLJavaJavaScriptJSONJSXKotlinLaTeXLessLuaMakefileMarkdownMATLABMarkupObjective-CPerlPHPPowerShell.propertiesProtocol BuffersPythonRRubySass (Sass)Sass (Scss)SchemeSQLShellSwiftSVGTSXTypeScriptWebAssemblyYAMLXML`   php artisan l5-swagger:generate   `

Accédez à http://127.0.0.1:8000/api/documentation

Tests avec PHPUnit
------------------

#### 1\. Exécuter tous les tests

Plain textANTLR4BashCC#CSSCoffeeScriptCMakeDartDjangoDockerEJSErlangGitGoGraphQLGroovyHTMLJavaJavaScriptJSONJSXKotlinLaTeXLessLuaMakefileMarkdownMATLABMarkupObjective-CPerlPHPPowerShell.propertiesProtocol BuffersPythonRRubySass (Sass)Sass (Scss)SchemeSQLShellSwiftSVGTSXTypeScriptWebAssemblyYAMLXML`   php artisan test   `

#### 2\. Exécuter les tests unitaires

Plain textANTLR4BashCC#CSSCoffeeScriptCMakeDartDjangoDockerEJSErlangGitGoGraphQLGroovyHTMLJavaJavaScriptJSONJSXKotlinLaTeXLessLuaMakefileMarkdownMATLABMarkupObjective-CPerlPHPPowerShell.propertiesProtocol BuffersPythonRRubySass (Sass)Sass (Scss)SchemeSQLShellSwiftSVGTSXTypeScriptWebAssemblyYAMLXML`   php artisan test --testsuite=Unit   `

#### 3\. Exécuter les tests fonctionnels

Plain textANTLR4BashCC#CSSCoffeeScriptCMakeDartDjangoDockerEJSErlangGitGoGraphQLGroovyHTMLJavaJavaScriptJSONJSXKotlinLaTeXLessLuaMakefileMarkdownMATLABMarkupObjective-CPerlPHPPowerShell.propertiesProtocol BuffersPythonRRubySass (Sass)Sass (Scss)SchemeSQLShellSwiftSVGTSXTypeScriptWebAssemblyYAMLXML`   php artisan test --testsuite=Feature   `

Consommation de l’API avec un Frontend
--------------------------------------

Si vous souhaitez tester l’API avec une interface frontend, vous pouvez utiliser Vue.js, React ou Angular. Exemple avec React.js :

#### 1\. Créer une application React.js

Plain textANTLR4BashCC#CSSCoffeeScriptCMakeDartDjangoDockerEJSErlangGitGoGraphQLGroovyHTMLJavaJavaScriptJSONJSXKotlinLaTeXLessLuaMakefileMarkdownMATLABMarkupObjective-CPerlPHPPowerShell.propertiesProtocol BuffersPythonRRubySass (Sass)Sass (Scss)SchemeSQLShellSwiftSVGTSXTypeScriptWebAssemblyYAMLXML`npx create-react-app my-app  cd CustomerCare` 

#### 2\. Installer Axios pour consommer l’API

Plain textANTLR4BashCC#CSSCoffeeScriptCMakeDartDjangoDockerEJSErlangGitGoGraphQLGroovyHTMLJavaJavaScriptJSONJSXKotlinLaTeXLessLuaMakefileMarkdownMATLABMarkupObjective-CPerlPHPPowerShell.propertiesProtocol BuffersPythonRRubySass (Sass)Sass (Scss)SchemeSQLShellSwiftSVGTSXTypeScriptWebAssemblyYAMLXML`   npm install axios   `

#### 3\. Exemple d’appel API

Plain textANTLR4BashCC#CSSCoffeeScriptCMakeDartDjangoDockerEJSErlangGitGoGraphQLGroovyHTMLJavaJavaScriptJSONJSXKotlinLaTeXLessLuaMakefileMarkdownMATLABMarkupObjective-CPerlPHPPowerShell.propertiesProtocol BuffersPythonRRubySass (Sass)Sass (Scss)SchemeSQLShellSwiftSVGTSXTypeScriptWebAssemblyYAMLXML`   import React, { useEffect, useState } from 'react';  import axios from 'axios';  const TicketList = () => {      const [tickets, setTickets] = useState([]);      useEffect(() => {          axios.get('http://127.0.0.1:8000/api/tickets')              .then(response => {                  setTickets(response.data);              })              .catch(error => {                  console.error(error);              });      }, []);      return (                          Liste des Tickets -----------------                  {tickets.map(ticket => (                      *   {ticket.title}                  ))}      );  };  export default TicketList;   `

Gestion de projet
-----------------

Ce projet suit une **méthodologie Agile** avec un **backlog** et **Kanban** sur Jira .

*   **Organisation sur Jira** :
    
    *   Backlog détaillé avec les tâches à réaliser.
        
    *   Commits réguliers et explicites.
