<!-- Cette page est le contenu de la page principale du site; Elle présente la liste des parkings. -->

<div id="divSousTitre">
	<h3>Selectionner un point de retrait</h3>
</div>
<div id="divContenu">
	<div class="choix">
		<select name="pets" id="choix">
			<!-- <option value="Dunkerque">Dunkerque</option>
			<option value="Calais">Calais</option>
			<option value="Paris">Paris</option>
			<option value="Marseille">Marseille</option> -->

		</select>
	</div>
	<div class="espaceHorizon"></div>
	<div class="ville"></div>
	<div class="espaceHorizon"></div>
	<div class="ligne titreLigne">
		<div class="commune">Temps</div>
		<div class="nom">Température min</div>
		<div class="etat">Température max</div>
	</div>
	<div class="ligne" id="info">
	<div class="colonne">
			<div class="blockImage">
				<div class="espace"></div>
				<div class="image"><img src="" alt=""></div>
				<div class="espace"></div>
			</div>
			<div class="commune">Temps</div>
		</div>
		<div class="colonne">
			<div class="blockImage">
				<div class="espace"></div>
				<div class="image"><img src="Images/thermometer-512.png" alt=""></div>
				<div class="espace"></div>
			</div>
			<div class="nom">Température min</div>
		</div>
		<div class="colonne">
			<div class="blockImage">
				<div class="espace"></div>
				<div class="image"><img src="Images/thermometer-red-512.png" alt=""></div>
				<div class="espace"></div>
			</div>
			<div class="etat">Température max</div>
		</div>
	</div>

	<div class="espaceHorizon"></div>
	<div class="espaceHorizon"></div>
	<div class="espaceHorizon"></div>
	<div>NASA</div>
	<input type="date" id="date" />
	<img id="nasa" src="" alt="">
	<div id="erreur"></div>
	

	<div class="espaceHorizon"></div>
</div>