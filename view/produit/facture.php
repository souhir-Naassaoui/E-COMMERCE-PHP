<?php
session_start();
require '../../model/conn.php';
$pdo=dbConnexion();
// Appel de la librairie FPDF
require("fpdf/fpdf.php");
// Création de la class PDF
class PDF extends FPDF {
    // Header
    function Header() {
        // Logo
        $this->Image('ffpdf/logo1.png',9,8,40);
        // Saut de ligne
        $this->Ln(20);
        // Titre gras (B) police Helbetica de 11
        $this->SetFont('Helvetica','B',21);
        // fond de couleur gris (valeurs en RGB)
        $this->setFillColor(255,255,255);
        // position du coin supérieur gauche par rapport à la marge gauche (mm)
        $this->SetX(70);
        // Texte : 60 >largeur ligne, 8 >hauteur ligne. Premier 0 >pas de bordure, 1 >retour à la ligneensuite, C >centrer texte, 1> couleur de fond ok
        $this->Cell(60,8,'Facture ',0,1,'C',1);
        // Saut de ligne 10 mm
        $this->Ln(10);
    }
    function signature() {
        // Logo
        $this->Image('ffpdf/sign.png',4,60,30);
        // Saut de ligne

    }
    // Footer
    function Footer() {
        $this->SetY(0);
        $this->Image('ffpdf/sign.png',150,150,50);

        $this->SetY(0-5);
        $this->Image('ffpdf/tampon.png',50,150,70);
        // Positionnement à 1,5 cm du bas
        $this->SetY(-15);
        // Adresse
        $this->Cell(196,5,'ENIS-Shopping vous remercie pour votre confiance',0,0,'C');
    }
}
// Activation de la classe
$pdf = new PDF('P','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Helvetica','',11);
$pdf->SetTextColor(0);


// Infos de la commande calées à gauche
$pdf->Text(8,58,'Pseudo client : '.$_SESSION['pseudo']);
$pdf->Text(8,63,'Date : '.date("d/m/Y"));
$pdf->Text(8,68,'Mode de reglement : Cheque');


// Infos du client calées à droite
$pdf->Text(120,58,utf8_decode($_POST['firstname']));
$pdf->Text(120,63,utf8_decode($_POST['address']));
$pdf->Text(120,68,$_POST['zip'].' '.$_POST['city']);
// Position de l'entête à 10mm des infos (48 + 10)
$position_entete = 84;

function entete_table($position_entete){
    global $pdf;
    $pdf->SetDrawColor(183); // Couleur du fond
    $pdf->SetFillColor(221); // Couleur des filets
    $pdf->SetTextColor(0); // Couleur du texte
    $pdf->SetY($position_entete);
    $pdf->SetX(8);
    $pdf->Cell(108,8,'Designation',1,0,'L',1);
    $pdf->SetX(110); // 8 + 96
    $pdf->Cell(25,8,'Quantite',1,0,'C',1);
    $pdf->SetX(130); // 104 + 10
    $pdf->Cell(34,8,'Prix Unitaire',1,0,'C',1);
    $pdf->SetX(160); // 104 + 10
    $pdf->Cell(25,8,'Prix',1,0,'C',1);
    $pdf->Ln(); // Retour à la ligne
}
entete_table($position_entete);
// Liste des détails
$position_detail = 92; // Position à 8mm de l'entête
$grand_total = 0; //initialisation de $grand_total
foreach ($_SESSION ['panier'] as $key => $qte) {//lecture du panier
    $rep = $pdo -> prepare ('SELECT * FROM produit WHERE REFERENCE= ?');
    $rep -> execute (array($key));
    $donnees = $rep -> fetch();
    $nom = $donnees ['DESIGNATION'];
    $prix = $donnees ['PRIX'];
    $prix_total = $prix*$qte; //calculs prix total et total à payer TTC
    $grand_total += $prix_total;

    $pdf->SetY($position_detail);
    $pdf->SetX(8);
    $pdf->MultiCell(102,8,utf8_decode($nom),1,'L');
    $pdf->SetY($position_detail);
    $pdf->SetX(110);
    $pdf->MultiCell(20,8,$qte,1,'C');
    $pdf->SetY($position_detail);
    $pdf->SetX(130);
    $pdf->MultiCell(30,8,$prix,1,'R');
    $pdf->SetY($position_detail);
    $pdf->SetX(160);
    $pdf->MultiCell(25,8,$prix_total,1,'R');
    $position_detail += 8;
}
$pdf->SetY($position_detail+1);
$pdf->SetX(130);
$pdf->MultiCell(30,8,'Total',1,'R');

$pdf->SetY($position_detail+1);
$pdf->SetX(160);
$pdf->MultiCell(25,8,$grand_total,1,'R');

// Nom du fichier
$nom = 'Facture.pdf';

// Création du PDF
$pdf->Output($nom,'I');?>

