<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Curriculum Vitae - Yesika Widiyani</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css"> <style>
        
        body { background: var(--secondary); color: var(--text); padding: 40px; font-family: 'Inter', sans-serif; }
        .cv-paper { 
            background: var(--white); color: var(--text); max-width: 850px; 
            margin: 0 auto; padding: 60px; border-radius: 20px;
            box-shadow: 0 20px 50px rgba(0, 31, 63, 0.1);
            border: 1px solid var(--border);
        }
        .cv-header { border-bottom: 2px solid var(--primary); padding-bottom: 20px; margin-bottom: 30px; display: flex; justify-content: space-between; align-items: center; }
        .cv-header h1 { margin: 0; font-size: 3rem; font-weight: 900; letter-spacing: -2px; color: var(--primary); }
        .contact-row { color: #666; font-size: 0.95rem; margin-top: 10px; }
        h3 { color: var(--primary); text-transform: uppercase; letter-spacing: 1px; margin-top: 45px; border-bottom: 2px solid var(--secondary); padding-bottom: 8px; }
        .job-title { font-weight: bold; font-size: 1.15rem; display: flex; justify-content: space-between; margin-top: 20px; }
        .date-tag { color: #888; font-weight: 400; font-size: 0.95rem; }
        .summary { font-style: italic; color: #555; line-height: 1.7; margin-bottom: 30px; background: #fafafa; padding: 20px; border-radius: 10px; border-left: 3px solid var(--secondary); }
        ul { padding-left: 18px; line-height: 1.8; color: #444; }
        .back-link { display: inline-block; margin-bottom: 30px; color: var(--primary); text-decoration: none; font-weight: bold; font-size: 1.1rem; }
        .back-link:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="cv-paper">
        <a href="index.php" class="back-link">← BACK TO PORTFOLIO</a>
        
        <div class="cv-header">
            <div>
                <h1>YESIKA WIDIYANI</h1>
                <div class="contact-row">
                    yesikawidi40@gmail.com | +62 878 5458 7496 <br>
                    Cilacap, Indonesia | linkedin.com/in/yesika-widiyani
                </div>
            </div>
        </div>

        <p class="summary">
            Informatics Engineering student with 1 year of experience as a Technical Writer in an IT-based company.
            Strong belief that documentation should be clear and easy to understand for its audience.
        </p>

        <h3>Education</h3>
        <div class="job-title">
            <span>Telkom University Purwokerto (TUP)</span>
            <span class="date-tag">2023 - Present</span>
        </div>
        <p style="margin: 5px 0;">Bachelor of Informatics Engineering</p>
        
        <div class="job-title" style="margin-top:15px;">
            <span>SMKN 26 Jakarta</span>
            <span class="date-tag">2019 - 2023</span>
        </div>
        <p style="margin: 5px 0;">High School Diploma, Major: SIJA</p>

        <h3>Working Experiences</h3>
        <div class="job-title">
            <span>Technical Writer - PT Solu Filantropi Teknologi</span>
            <span class="date-tag">May 2022 - Jun 2023</span>
        </div>
        <ul>
            <li>Created technical documentation (Project proposals, monthly reports).</li>
            <li>Developed application user manuals and conducted Quality Control.</li>
        </ul>

        <div class="job-title">
            <span>Freelance QA - PT Astra Jingga</span>
            <span class="date-tag">Jul 2023 - Aug 2023</span>
        </div>
        <p style="margin: 5px 0;">Outsourced QA at BRI Corporate University for the BRISmart project.</p>

        <h3>Skills</h3>
        <p><b>Software:</b> MS Office, Draw.io, Notion, Jira</p>
        <p><b>Hard/Soft Skills:</b> Technical Documentation, QC, Communication, Teamwork.</p>
    </div>
</body>
</html>