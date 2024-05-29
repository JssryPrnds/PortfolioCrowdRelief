<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="intro">
        <h1>Online Portfolio</h1>
            <div class="text ">
                <p1>Hello, welcome to our online Portfolio!</p1>
                    <br>   
                <p2>Bachelor of Science in Information Technology - 3C
                <br>Members:</br>
                <ol>
                    <li>Hanna Jane Calanuga</li>
                    <li>Carl Catoto</li>
                    <li>Anne Monique Palmaira</li>
                    <li>Jessie Rey Prandas</li>
                </ol>
                </p2>
            </div>
        
		<button onclick="scrollToRationale()">Get Started</button>
    </div>

        <div class="main-title" id="main">
            <h1>CrowdRelief:Empowering Disaster Relief Through Crowdfunding Innovation</h1>
        </div>
        <div class="section">
            <h2>Rationale</h2>
                <p>
                    A disaster is a serious disruption of the functioning of a community or a society involving widespread human, material, economic, or environmental losses and impacts, which exceeds the ability of the affected community or society to cope using its own resources (UNISDR, 2009). The Philippines, one of the most disaster-prone countries in the world, has a history of being hit by various types of disasters such as typhoons, floods, landslides, volcanic eruptions, and earthquakes. As reported by the National Disaster Risk Reduction and Management Council (NDRRMC), as of December 2020, a total of 145 disasters occurred in the country, affecting over 2.5 million people and causing damages amounting to PHP 22.7 billion (NDRRMC, 2020).
                </p>

                <p>
                    The effects of disasters in the Philippines are often devastating, leading to loss of lives, homes, infrastructure, and livelihoods. The most vulnerable sectors, such as the poor, women, children, and persons with disabilities, are usually the most affected (Government of the Philippines, 2019). In Iloilo, recent events have further highlighted the region’s vulnerability. In July 2023, Typhoon Egay caused heavy rainfall that flooded 70 barangays in Iloilo City, prompting the evacuation of 489 families. This event is a stark reminder of the ongoing threat posed by natural calamities in the area. The agricultural sector often bears the brunt of such events, with a report noting damages amounting to PHP 14.5 million in agriculture alone, including rice crops, corn, fishing boats, and livestock. In February 8, 2024, a fire incident in La Paz District killed a call center agent and a college student. Similarly, in March 5, 2024, a residential area was hit by fire at the Barangay Airport, Mandurriao District causing severe damaged to the 36 houses and partial damages for 14 houses (Iloilo City Disaster Risk and Reduction Management Office). 
                </p>

                <p>
                    In response to the frequent disasters in the country, there is a need for an innovative system that can facilitate effective and efficient disaster relief efforts. CrowdRelief: Empowering Disaster Relief Through Crowdfunding Innovation system aims to address this need by developing a crowdfunding innovation system that will act as a centralized hub for coordinating donation efforts, ensuring the efficient allocation of resources, and will offer transparent reporting to stakeholders. This system aims to address the inefficiencies and challenges in disaster relief efforts by providing a comprehensive, transparent, and user-friendly platform for both donors and relief organizations.
                </p> 
        </div>
        <hr class="section-divider">
        <div class="section">
            <h2>Objectives</h2>
                <p>
                    This study aims to design and develop a platform for disaster relief operation. Specifically, this study aims to:

                    <ol> 
                        <li>Manage Partner’s Account (LGU and NGO) </li>
                        <li>Manage crowd funding campaign </li>
                        <li>Accept donation in-kind, cash and online payment</li>
                        <li>Track movement of in-kind donations</li>
                        <li>Notification for the donor upon receipt through badge only</li>
                        <li>Mapping for drop-off points</li>
                        <li>Generate the audited financial statement </li>

                    </ol>
                </p>
        </div>
        <hr class="section-divider">
        <div class="section">
            <h2>Database Architecture</h2>
            <p>
                In CrowdRelief: Empowering Disaster Relief Through Crowdfunding Innovation we would bolster scalability, maintainability, and security. The platform comprises three layers: presentation, application logic, and data storage.
                </p>
            <h3>Presentation Tier (Frontend)</h3>
                <p>
                This tier houses user interface components, facilitating direct interaction with users via web browsers. Within CrowdRelief, this tier accommodates donor interfaces for browsing campaigns, making donations, and tracking contributions, as well as interfaces for campaign management. The three-tier architecture enables the separation of presentation logic from underlying layers, simplifying UI maintenance and updates.
                </p>
            <h3>Application Tier (Backend)</h3>
                <p>
                The application tier hosts business logic and functionality for processing user requests and database interactions. In CrowdRelief, this tier manages donation validation, campaign administration, and report generation. By isolating application logic from the presentation layer, the system gains scalability and maintainability, allowing independent modifications to business rules.
                </p>
            <h3>Data Tier (Database)</h3>
                <p>
                This tier stores and manages system data, encompassing user accounts, donation records, campaign details, and related information. In CrowdRelief, the database plays a pivotal role in storing donation data, user profiles, and campaign information. The three-tier architecture segregates data storage and retrieval logic, enhancing system performance, scalability, and security.
                </p> 
        </div>
        <script>
            function scrollToRationale(){
                const rationaleSection=document.getElementById('main');
                rationaleSection.scrollIntoView({behavior:'smooth'});
            }
        </script>
</body>
</html>
