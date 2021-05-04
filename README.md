# JPO_FORM
Formulaire en ligne on docker

<h2>Récupération du projet</h2>

Installation de git et clonage du projet

<pre><code>sudo apt install git</code>
<code>git clone https://github.com/Folcoxx/JPO_FORM.git</code></pre>

<h2>Installation des prérequis (Inutile si Docker et Docker sont déja présent)</h2>

<pre><code>cd JPO_FORM/</code>
<code>chmod 755 requirement.sh</code>
<code>./requirement.sh</code></pre>

<h2>Monter le container Docker</h2>

<pre><code>cd JPO_FORM/</code>
<code>docker compose up -d</code></pre>