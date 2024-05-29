<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="main-title" id="main">
            <h1>Database Architecture</h1>
        </div>
        <div class="section">
                <p>
                In CrisisConnect: Empowering Disaster Relief Through Crowdfunding Innovation we would bolster scalability, maintainability, and security. The platform comprises three layers: presentation, application logic, and data storage.
                </p>
            <h2>Presentation Tier (Frontend)</h2>
                <p>
                This tier houses user interface components, facilitating direct interaction with users via web browsers. Within CrisisConnect, this tier accommodates donor interfaces for browsing campaigns, making donations, and tracking contributions, as well as interfaces for campaign management. The three-tier architecture enables the separation of presentation logic from underlying layers, simplifying UI maintenance and updates.
                </p>
            <h2>Application Tier (Backend)</h2>
                <p>
                The application tier hosts business logic and functionality for processing user requests and database interactions. In CrisisConnect, this tier manages donation validation, campaign administration, and report generation. By isolating application logic from the presentation layer, the system gains scalability and maintainability, allowing independent modifications to business rules.
                </p>
            <h2>Data Tier (Database)</h2>
                <p>
                This tier stores and manages system data, encompassing user accounts, donation records, campaign details, and related information. In CrisisConnect, the database plays a pivotal role in storing donation data, user profiles, and campaign information. The three-tier architecture segregates data storage and retrieval logic, enhancing system performance, scalability, and security.
                </p>    
        </div>
    </body>
</html>