<!DOCTYPE html>
<html>
   <head>
      <?php 
         include 'function.php';
         check_user()
         ?>
      <link rel="stylesheet" type="text/css" href="CSS/RechnungStyle.css"/>
      <script type="text/javascript" src="JS/script.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="JS/bootstrap.min.css">
   
      
   </head>
   <body>
      <script src="functionRich.js"></script>
      <div id = "container">
         <header>
            <p class="foto"><img src="img/logoo.png"></img></p>
            <p class="aboutUs"></br>- Neubau von Ein- und </br> &nbsp &nbsp Mehrfamilienhäusern</br>- Hoch- und Tiefbau</br>- Trockenbau
               </br>- Vollwärmeschutz </br>- Innen- und Außenputz</br>- Beton- und Pflasterarbeiten</br>- Gartengestaltung</br>- Carports</br>- Lieferung und Einbau von</br> &nbsp  &nbsp Türen und Fenstern
            </p>
            <p class="addresa">E & L Gojanaj, Richard-Wagner-Ring 39, 35630 Ehringshausen</p>
         </header>
         <form action="" method="POST" onsubmit="return false">
            <div class="adr">
               <input type="text" name="" class="fam" placeholder="Fam."></input>
               <input type="text" name="" class="emriMbiemri" placeholder="Emri dhe Mbiemeri"></input>
               <textarea type="text" name="" id="adresa1" placeholder="Adresa"></textarea>
            </div>
            
            <div class="oferta">
               <h1>Rechnug</h1>
               <p> Datum: <input type="date" name="Datum" placeholder="Sheno daten" > </br> Sachbearbeiter/- in: Gojanaj </br> Tel:. 06443/8339528 </p>
            </div>
            <div id="adresa2">
               <div>
                  <textarea type="text" name="" rows="3" class="put1" placeholder="Adresa Dytesore" > </textarea>
               </div>
               <div>
                  <label><b id="ad2text">Rechnungsnummer</b></label>
                  <input type="number" class="put2" ></input>
               </div>
               <div>
                  <label><b>Leistungszeitraum:</b></label>
                  <input type="date" class="put3">-</input>
                  <input type="date" class="put32"></input>
               </div>
            </div>
            <table border = "1" align="center" width="70%" id="tabela_zulu" text-align="center">
               <tr>
            <button id="add_button" value="1" onclick="add_in_tabela()">+</button>
                  <th width="10%"> Pos.  </th>
                  <th> Bezzeichnung   </th>
                  <th width="1px">Anzahl</th>
                  <th  width="1px"> Einheit   </th>
                  <th width="1px" > Einzelpreis  </th>
                  <th colspan="2" width="15%" align="center"> Gesamtpreis  </th>
                  
                  <p id="count" name="" value="0">
               </tr>
            </table>
            <div id="shuma">
               <p>Total EUR ohne MwSt.<input type="text" name="" id="general_price" disabled>
               <p>19% MwSt. EUR </p>
               <input type="text" name="" id="general_price_withPRC" disabled>
               <P><b>Total EUR inkl. MwSt.</b> </P>
               <input type="text" name="" disabled id="all_price">
               <input type="button" value="Gjenero" class="buttoniFinal"  onclick="myFunction()"></input>
               <textarea class="pf" placeholder="Pershkrimi Perfundimtar"></textarea>
            </div>
            <button onclick="topFunction()" id="scroll" title="Go to top">^</button>
         </form>
         <div class="info">
            <p class="pos1">Richard-Wagner-Ring 39</br>35630 Ehringshausen</br>Steuernr. 03931760057</p>
            <p class="pos2">Tel.: 06443 / 8339528</br>Fax: 06443 / 8339529</br>IBAN: DE22 5155 0035 0002 0917 34</p>
            <p class="pos3">Kontakt wir E-Mail</br>flato-bau@gmx.de</br><b>www.Flato-Bau.de</b></p>
         </div>
      </div>
   </body>
</html>
