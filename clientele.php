<?php include('header.php'); ?>
<html>
<style>
        body {
            background-color:  #adadad;
        }
    </style>    
</html>

                    <div class="container">
                        <div class="page-title-content1">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <h2>CLIENTELE</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="sponsorContainer"></div>

<script>
// Assuming you have an array of sponsor data and image files
const sponsorData = ["Marshal","Bluecross","Ace","Barry","Boston","Cornerstone","Ed-cast","Flipkart","Gs-Group","Health-India","Helios","HL-Agro","JR","Kotak","Max","Narnalia","Neogrowth","Riso","Spinnaker","Syn","Tran","Virtela","Wamindia","Win"
    // Add more clients as needed
];

// Function to generate HTML for each sponsor
function generateSponsorHTML(sponsor) {
    return `
        <div class="flex" style="margin: 10px">
            <div class="sponsor-card">
                    <img
                        src="img/clientele/${sponsor}.jpg"
                        alt="${sponsor} Logo"
                        height="180"
                        width="auto"
                        style="padding: 12px;"
                    />
                <div  class="sponsor-card-content">
                    <span style="font-size:20px; font-family:Veronica; color: #ffffff">${sponsor}</span>
                    
                </div>
            </div>
        </div>`;
}

// Render sponsors to the container
const sponsorContainer = document.getElementById('sponsorContainer');
sponsorData.forEach((sponsor) => {
    sponsorContainer.innerHTML += generateSponsorHTML(sponsor);
});
</script>

<style>
    #sponsorContainer {
        display: flex;
        flex-wrap: wrap; /* Allow cards to wrap to the next line if the container is too small */
        justify-content: space-around; /* Adjust as needed: space-around, space-between, center, etc. */
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .sponsor-card {
        max-width: 200px;
        background-color: #36454F;
        display: flex;
        flex-direction: column;
        border-radius: 12px;
        height: 100%;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .sponsor-card img {
        padding: 5px;
    }

    .sponsor-card-content {
        padding: 2px;
        text-align: center;
    }

    .sponsor-name {
        text-align: center;
    }
</style>



<?php include('footer.php'); ?>