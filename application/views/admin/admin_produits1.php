<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= theme_url() ?>assets/css/lancer_inventaire.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../icone/css/font-awesome.min.css">
    <title>administrateur produits 2</title>
</head>

<body>
    <main>
        <div class="main-contenair">
            <header>
                <div class="header">
                    <div class="head-symbole">
                    <div class="symbole">inventaire <br> <span style="margin-left: 1.5rem;">G043</span></div>
                    <div class="btn-menu"><span>menu</span></div>
                    </div>
                    <h2>administrateur</h2>
                    <div class="texte_droit">
                        <div class="deconexion"><span class="btn">déconnexion <i class="fa fa-trash" aria-hidden="true"></i></span></div>
                        <div class="fiche"><span>générer une fiche <br> récapitulative</span></div>
                    </div>
                </div>
                <div class="second-section-header">
                    <ul>
                        <li> <a href="#">bazar</a> </li>
                        <li class="active"><a href="">épicerie</a></li>
                        <li><a href="">liquides</a></li>
                        <li><a href="">vivres frais</a></li>
                        <li><a href="">hors gamme</a></li>
                    </ul>
                </div>
                <div class="date_inventaire"><span>inventaire du 00/00/00 compte: XXXXXXX</span></div>
            </header>
            <!-- ============================* liste *========================= -->
            <div class="table">
                <table>
                    <thead>
                        <tr class="first-head">
                            <th colspan="2">folio</th>
                            <th colspan="4">libellé</th>
                            <th>Prix de vente</th>
                            <th>quantité en rayon</th>
                            <th>quantité en stock</th>
                            <th>total</th>
                        </tr>

                        <tr class="first-head">
                            <th colspan="2">code famille: 000</th>
                            <th colspan="8"> nom de la famille: nourriture pour chien</th>     
                        </tr>
                       
                    </thead>
                    <tbody>
                        <tr>
                            <!-- <td>code famille</td> -->
                            <td colspan="2">folio</td>
                            <td colspan="4">libellé</td>
                            <!-- <td></td> -->
                            <td>Prix de vente</td>
                            <td>quantité en rayon</td>
                            <td>quantité en stock</td>
                            <td>total</td>
                        </tr>

                        <tr>
                            <!-- <td>code famille</td> -->
                            <td colspan="2">folio</td>
                            <td colspan="4">libellé</td>
                            <!-- <td></td> -->
                            <td>Prix de vente</td>
                            <td>quantité en rayon</td>
                            <td>quantité en stock</td>
                            <td>total</td>
                        </tr>

                        <tr>
                            <!-- <td>code famille</td> -->
                            <td colspan="2">folio</td>
                            <td colspan="4">libellé</td>
                            <!-- <td></td> -->
                            <td>Prix de vente</td>
                            <td>quantité en rayon</td>
                            <td>quantité en stock</td>
                            <td>total</td>
                        </tr>

                        <tr>
                            <!-- <td>code famille</td> -->
                            <td colspan="2">folio</td>
                            <td colspan="4">libellé</td>
                            <!-- <td></td> -->
                            <td>Prix de vente</td>
                            <td>quantité en rayon</td>
                            <td>quantité en stock</td>
                            <td>total</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </main>
</body>

</html>