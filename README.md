# JPO_FORM
Formulaire en ligne via docker compose

<h2>Récupération du projet</h2>

Installation de git et clonage du projet

<pre><code>sudo apt install git</code>
<code>git clone https://github.com/Folcoxx/JPO_FORM.git</code></pre>

<h2>Installation des prérequis</h2>

<pre><code>cd JPO_FORM/</code>
<code>chmod 755 requirement.sh debug.sh</code>
<code>./requirement</code></pre>

<h2>Monter le container Docker</h2>

<pre><code>docker compose up --build</code></pre>

<h2>Debug</h2>

Pour l'erreur suivante qui peux apparaitre lors de l'envoie du formulaire. (Dockerfile ??)

<pre><code>"Erreur : could not find driver"</code></pre>

Il suffit d'executer le debug.sh

<pre><code>cd JPO_FORM/</code>
<code>./debug.sh</code></pre>
