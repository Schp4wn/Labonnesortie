// alert(document.URL);
// alert(lion_taille_image);
// alert(lion_carte);
//alert(lion_dpt_couleur_fond['59']);
//alert(lion_dpt_couleur_fond);
// alert(lion_commune[0]);
// alert(lion_commune[1]);
//alert(lion_commune);
if(lion_carte=="fr" || lion_carte=="FR" || lion_carte=="Fr" || lion_carte=="fR"){
 link_x=2;
 link_y=1*lion_taille_image-15;
 link_x2=75;
 link_y2=1*lion_taille_image-1;
 document.write('<map name="lion1906"><area shape="rect" coords="'+link_x+','+link_y+','+link_x2+','+link_y2+'" href="http://www.lion1906.com" target=_blank></map><table cellpadding=0 cellspacing=0 width='+lion_taille_image+' height='+lion_taille_image+' style=><tr><td background="http://www.lion1906.com/outils/img_fr.php?NbPx='+lion_taille_image+'&CouleurFond='+lion_carte_couleur_fond+'&CouleurContourFr='+lion_carte_couleur_contour+'&couleur_communes_surbrillance='+lion_communes_surbrillance+'&liste='+lion_commune+'&coul_dpt='+lion_dpt_couleur_fond+'&referrer='+document.URL+'"><img src=http://www.lion1906.com/outils/Vide.gif width='+lion_taille_image+' height='+lion_taille_image+' border='+lion_image_bordure+' usemap="#lion1906"></td></tr></table>');
// document.write('outils/img_fr.php?NbPx='+lion_taille_image+'&CouleurFond='+lion_carte_couleur_fond+'&CouleurContourFr='+lion_carte_couleur_contour+'&couleur_communes_surbrillance='+lion_communes_surbrillance+'&liste='+lion_commune+'&coul_dpt='+lion_dpt_couleur_fond+'&referrer='+document.URL+'');

}
else{
 link_x=1*lion_taille_image-77;
 link_y=1*lion_taille_image-15;
 link_x2=1*lion_taille_image-1;
 link_y2=1*lion_taille_image-1;
 document.write('<map name="lion1906"><area shape="rect" coords="'+link_x+','+link_y+','+link_x2+','+link_y2+'" href="http://www.lion1906.com" target=_blank></map><table cellpadding=0 cellspacing=0 width='+lion_taille_image+' height='+lion_taille_image+' style=><tr><td background="http://www.lion1906.com/outils/img_dpt.php?NbPx='+lion_taille_image+'&Dpt='+lion_carte+'&CouleurFond='+lion_carte_couleur_fond+'&CouleurFondDpt='+lion_carte_couleur+'&CouleurContourDpt='+lion_carte_couleur_contour+'&LargeurPx='+lion_carte_epaisseur_contour+'&AfficheVilles='+lion_affiche_communes+'&TaillePts='+lion_affiche_communes_contour+'&CouleurPts='+lion_affiche_communes_couleur+'&DptVoisins='+lion_affiche_dpts_voisins+'&CouleurDptVoisins='+lion_couleur_dpts_voisins+'&couleur_communes_surbrillance='+lion_communes_surbrillance+'&communes='+lion_commune+'&referrer='+document.URL+'"><img src=http://www.lion1906.com/outils/Vide.gif width='+lion_taille_image+' height='+lion_taille_image+' border='+lion_image_bordure+' usemap="#lion1906"></td></tr></table>');
// document.write('outils/img_dpt.php?NbPx='+lion_taille_image+'&Dpt='+lion_carte+'&CouleurFond='+lion_carte_couleur_fond+'&CouleurFondDpt='+lion_carte_couleur+'&CouleurContourDpt='+lion_carte_couleur_contour+'&LargeurPx='+lion_carte_epaisseur_contour+'&AfficheVilles='+lion_affiche_communes+'&TaillePts='+lion_affiche_communes_contour+'&CouleurPts='+lion_affiche_communes_couleur+'&DptVoisins='+lion_affiche_dpts_voisins+'&CouleurDptVoisins='+lion_couleur_dpts_voisins+'&couleur_communes_surbrillance='+lion_communes_surbrillance+'&communes='+lion_commune+'&referrer='+document.URL+'');
}



/*
outils/img_fr.php?NbPx=500&CouleurFond=FFFFFF&couleur_communes_surbrillance=00FF00&communes=&coul_dpt=

<html>
<body style=margin:0px>
<iframe id=carte_lion1906 name=carte_lion1906 frameborder=0 scrolling=no></iframe>
<script>
document.getElementById(\'carte_lion1906\').width=lion_taille_image;
document.getElementById(\'carte_lion1906\').height=lion_taille_image;
</script>
<form name=genere_carte method=get action=outils/img_dpt.php style=margin:0px>
<input type=hidden name=NbPx>
<input type=hidden name=Dpt>
<input type=hidden name=CouleurFond>
<input type=hidden name=CouleurFondDpt>
<input type=hidden name=CouleurContourDpt>
<input type=hidden name=LargeurPx>
<input type=hidden name=AfficheVilles>
<input type=hidden name=TaillePts>
<input type=hidden name=CouleurPts>
<input type=hidden name=DptVoisins>
<input type=hidden name=CouleurDptVoisins>
</form>
<script>
document.genere_carte.NbPx.value=lion_taille_image;
document.genere_carte.Dpt.value=lion_carte;
document.genere_carte.CouleurFond.value=lion_carte_couleur_fond;
document.genere_carte.CouleurFondDpt.value=lion_carte_couleur;
document.genere_carte.CouleurContourDpt.value=lion_carte_couleur_contour;
document.genere_carte.LargeurPx.value=lion_carte_epaisseur_contour;
document.genere_carte.AfficheVilles.value=lion_affiche_communes;
document.genere_carte.TaillePts.value=lion_affiche_communes_contour;
document.genere_carte.CouleurPts.value=lion_affiche_communes_couleur;
document.genere_carte.DptVoisins.value=lion_affiche_dpts_voisins;
document.genere_carte.CouleurDptVoisins.value=lion_couleur_dpts_voisins;
genere_carte.submit()
</script>



//lion_commune.push('xxxxx'); //Affiche une commune en surbrillance d'après son code insee xxxxx (peut-être répétée autant de fois que souhaité dans la limite des communes du département)



*/
