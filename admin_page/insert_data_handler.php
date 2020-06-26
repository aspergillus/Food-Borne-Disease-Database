<?php
    include('config.php');
    // get all the variable names here
    $organism_name = $_POST['organism_name'];
    // logic here

    $data = '
<style>
.data_insertion{
    font-size: 16px;
}
.name{
    font-weight: bolder;
    font-size: 20px;
    color: #8A4D6A;
}
.bold_action{
    font-weight: bolder;
    color: #1F283D;
    font-size: 20px;
}
.Classification_heading{
    font-weight: bolder;
}
.Taxonomic{
    text-align: center;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: center;    
}
</style>

<div class="data_insertion">
<span>
    <span class="name">Organism Name:-</span> <span>'.$organism_name.'</span>
</span>
<br>
<br>
<hr align="right" width="auto">
<span>
    <span class="bold_action">Disease Caused</span>
    <ul>
        <li>Gastroenteritis and Skin Infections</li>
        <li>Peritonitis</li>
        <li>Bacteremia</li>
        <li>Meningitis</li>
        <li>Cholera-like Illness</li>
        <li>Hemolytic Uremic Syndrome</li>
        <li>Necrotizing Fasciitis</li>
        <li>Motile aeromonad septicemia in carp, tilapia, perch, catfish, and salmon</li>
        <li>Red Sore Disease in bass and carp</li>
        <li>Ulcerative infections like epizootic ulcerative syndrome in catfish, cod, carp, and goby</li>
    </ul>
</span>
<hr align="right" width="auto">
<span>
    <span class="bold_action">Found In</span>
    
    <ul>
        <li>Contaminated Water</li>
        <li>Food Like Meat</li>
        <li>Dairy</li>
        <li>Shrimp OR Fish </li>
    </ul>
</span>
<hr align="right" width="auto">
<span>
    <span class="bold_action">General Description</span>
    <p>Gram-negative, rod-shaped facultative anaerobes, ranging in size from 0.3-1.0 µm wide by 1.0-3.5 µm long. They are motile by a single polar flagellum. The bacteria can produce heat-labile enterotoxins, which can be associated with haemolysin and cytotoxin production.</p>
</span>
<hr align="right" width="auto">
<span>
    <span class="bold_action">Hosts</span>
    <ul>
        <li>Human</li>
        <li>Animals</li>
        <li>Birds</li>
        <li>Fish</li>
        <li>Cold-Blooded Marine and Fresh-water Reptiles</li>
    </ul>
</span>
<hr align="right" width="auto">
<span>
    <span class="bold_action">Transmission</span>
    <p>Infection is spread via fecal-oral transmission during direct ingestion or drinking of contaminated water or foods. Infection can also be transmitted by eating contaminated meat, dairy, shrimp, or fish. It can be transferred from human-to-human by contact with infected wounds, feces or blood. The pathogen can also be transferred during sports; especially when played in muddy environments involving transfer of infected soil.</p>
</span>
<hr align="right" width="auto">
<span>
    <span class="bold_action">Affected Organ:-</span><span>Gastro Intestinal Organs</span>
</span>
<hr align="right" width="auto">
<span>
    <span class="bold_action">Hosts</span>
    <ul>
        <li>Rice- Water Diarrhea</li>
        <li>Mild Symptoms include Fever and Chills</li>
        <li>Overwhelming Bacterial Infection often exhibit abdominal pain, nausea, vomiting, and diarrhea</li>
        <li>Dysenteric gastroenteritis that causes loose stools filled with blood and mucus</li>
    </ul>
</span>
<hr align="right" width="auto">
<span>
    <span class="bold_action">Inclubation Period</span>
    <p>The reported incubation period for Aeromonas-associated diarrhea is 1 to 2 days. Aeromonas’ infections contracted via recreational sporting activities, such as swimming occur as early as 24h post exposure. Cellulitis is the most frequent soft tissue infection and is usually accompanied by systemic signs developing within 8 to 48 h. The length of time from initial A. hydrophila infection to bacteremia ranges from 1 to 38 days.</p>
</span>
<hr align="right" width="auto">
<span>
    <span class="bold_action">Pervention</span>
    <p>limit the Aeromonas species entering the distribution system through effective treatment and maintenance, to maintain temperatures below 14°C, to provide free-chlorine residuals above 0.1–0.2 mg/L, and to limit the levels of organic carbon compounds in the water.</p>
</span>
<hr align="right" width="auto">
<span>
    <span class="bold_action">Susceptible</span>
    <ul>
        <li>Cefotaxime</li>
        <li>Ciprofloxacin</li>
        <li>Nalidixic acid and Silver</li>
        <li>Chlorine in water</li>
    </ul>
</span>
<hr align="right" width="auto">
<div>
    <span class="bold_action">Taxonomic Classification</span>
    <br>
    <table style="width:30%">
    <br>
        <tr>
            <th colspan="2" style="text-align: center;">Classification</th>
        </tr>
        <tr>
            <td class="Classification_heading">Domain</td>
            <td>Bacteria</td>
        </tr>
        <tr>
            <td class="Classification_heading">Kingdom</td>
            <td>Proteobacteria</td>
        </tr>
        <tr>
            <td class="Classification_heading">Phylum</td>
            <td>Gammaproteobacteria</td>
        </tr>
        <tr>
            <td class="Classification_heading">Class</td>
            <td>Aeromonadales</td>
        </tr>
        <tr>
            <td class="Classification_heading">Genus</td>
            <td>Aeromonas</td>
        </tr>
        <tr>
            <td class="Classification_heading">Species</td>
            <td>A. Hydrophila</td>
        </tr>		
    </table>
</div>
<hr align="right" width="auto">
<span>
    <span class="bold_action">Genome Information</span>
    <p>Aeromonas hydrophila subsp. hydrophila ATCC 7966, Ref Seq: NC_008570.1, DNA circular, Size 4.74Mb, GC% 61.5, Protein 4119, rRNA 31, tRNA 128, Gene 4,284</p>
</span>
<hr align="right" width="auto">
<span>
    <span class="bold_action">Reference</span>
    <ul>
        <li><a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4601520/">https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4601520</a></li>
        <li><a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC3373137/">https://www.ncbi.nlm.nih.gov/pmc/articles/PMC3373137</a></li>
        <li><a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC3097544/">https://www.ncbi.nlm.nih.gov/pmc/articles/PMC3097544</a></li>
        <li><a href="https://www.canada.ca/en/public-health/services/laboratory-biosafety-biosecurity/pathogen-safety-data-sheets-risk-assessment/aeromonas-hydrophila.html">https://www.canada.ca/en/public-health/services/laboratory-biosafety-biosecurity/pathogen-safety-data-sheets-risk-assessment/aeromonas-hydrophila</a></li>
        <li><a href="http://antimicrobe.org/b74.asp">http://antimicrobe.org/b74</a></li>
        <li><a href="https://wwwnc.cdc.gov/eid/article/9/5/02-0451_article">https://wwwnc.cdc.gov/eid/article/9/5/02-0451_article</a></li>
        <li><a href="https://www.msdsonline.com/resources/sds-resources/free-safety-data-sheet-index/aeromonas-hydrophila/">https://www.msdsonline.com/resources/sds-resources/free-safety-data-sheet-index/aeromonas-hydrophila</a></li>
        <li><a href="https://www.sciencedirect.com/topics/veterinary-science-and-veterinary-medicine/aeromonas-hydrophila">https://www.sciencedirect.com/topics/veterinary-science-and-veterinary-medicine/aeromonas-hydrophila</a></li>
        <li><a href="https://www.academia.edu/Documents/in/Aeromonas_Hydrophila">https://www.academia.edu/Documents/in/Aeromonas_Hydrophila</a></li>
    </ul>
</span>
</div>
';

$query = mysqli_query($connection, "insert into disease_data (disease_id, disease_title, disease_content) values (1,2, '$data')");
if ($query) {
    echo 'inserted';
}

?>