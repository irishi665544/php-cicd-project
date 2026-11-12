
<?php

$appName = "DevOps CI/CD Platform";
$version = "1.0.0";

$technologies = [
    "PHP 8.3",
    "Docker",
    "Jenkins",
    "SonarQube",
    "GitHub"
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo htmlspecialchars($appName); ?></title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            background: #0b1120;
            color: #f8fafc;
            min-height: 100vh;
        }

        .container {
            max-width: 1150px;
            margin: auto;
            padding: 30px 24px;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 18px 0;
            border-bottom: 1px solid #263247;
        }

        .logo {
            font-size: 23px;
            font-weight: 700;
            color: #a78bfa;
        }

        .badge {
            background: #123b32;
            color: #4ade80;
            padding: 9px 16px;
            border-radius: 30px;
            font-size: 13px;
        }

        .hero {
            padding: 90px 20px;
            text-align: center;
            background: radial-gradient(
                circle at top,
                #30245d 0%,
                #111a30 50%,
                #0b1120 100%
            );
            border-radius: 24px;
            margin-top: 35px;
        }

        .tag {
            color: #c4b5fd;
            font-size: 13px;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        h1 {
            font-size: clamp(34px, 6vw, 58px);
            margin: 22px 0;
            line-height: 1.15;
        }

        h1 span {
            color: #a78bfa;
        }

        .description {
            color: #a5b4c9;
            max-width: 650px;
            margin: auto;
            line-height: 1.8;
            font-size: 16px;
        }

        .button {
            display: inline-block;
            margin-top: 30px;
            padding: 14px 28px;
            background: #7c3aed;
            color: white;
            text-decoration: none;
            border-radius: 10px;
            font-weight: 600;
            transition: .3s;
        }

        .button:hover {
            background: #6d28d9;
            transform: translateY(-3px);
        }

        .section-title {
            margin: 55px 0 25px;
            font-size: 24px;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(
                auto-fit,
                minmax(190px, 1fr)
            );
            gap: 18px;
        }

        .card {
            background: #151f33;
            border: 1px solid #293750;
            padding: 25px;
            border-radius: 16px;
            transition: .3s;
        }

        .card:hover {
            transform: translateY(-5px);
            border-color: #8b5cf6;
        }

        .icon {
            font-size: 30px;
            margin-bottom: 18px;
        }

        .card h3 {
            margin-bottom: 10px;
            font-size: 18px;
        }

        .card p {
            color: #94a3b8;
            font-size: 14px;
            line-height: 1.6;
        }

        .deployment {
            margin-top: 45px;
            padding: 30px;
            background: #151f33;
            border: 1px solid #293750;
            border-radius: 16px;
        }

        .deployment h2 {
            margin-bottom: 20px;
        }

        .status {
            color: #4ade80;
            font-weight: 600;
        }

        .details {
            display: grid;
            grid-template-columns: repeat(
                auto-fit,
                minmax(180px, 1fr)
            );
            gap: 20px;
            margin-top: 20px;
        }

        .detail-box {
            padding: 18px;
            background: #0b1120;
            border-radius: 10px;
        }

        .detail-box small {
            display: block;
            color: #94a3b8;
            margin-bottom: 8px;
        }

        footer {
            text-align: center;
            padding: 40px 10px;
            color: #64748b;
            font-size: 13px;
        }

        @media(max-width: 600px) {
            .hero {
                padding: 60px 15px;
            }

            nav {
                gap: 12px;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <nav>
        <div class="logo">⚡ DevOpsLab</div>
        <div class="badge">● Application Online</div>
    </nav>

    <section class="hero">

        <div class="tag">Welcome to the DevOps World</div>

        <h1>
            Build. Deploy.<br>
            <span>Automate Everything.</span>
        </h1>

        <p class="description">
            Welcome to our <?php echo htmlspecialchars($appName); ?>.
            Experience automated software deployment powered by
            modern DevOps technologies.
        </p>

        <a href="#technologies" class="button">
            Explore Technologies →
        </a>

    </section>

    <h2 class="section-title" id="technologies">
        Technology Stack
    </h2>

    <div class="cards">

        <div class="card">
            <div class="icon">🐘</div>
            <h3>PHP</h3>
            <p>Backend application development and server-side processing.</p>
        </div>

        <div class="card">
            <div class="icon">🐳</div>
            <h3>Docker</h3>
            <p>Containerization for consistent application deployment.</p>
        </div>

        <div class="card">
            <div class="icon">🔧</div>
            <h3>Jenkins</h3>
            <p>Automated CI/CD pipeline and deployment orchestration.</p>
        </div>

        <div class="card">
            <div class="icon">🔍</div>
            <h3>SonarQube</h3>
            <p>Code quality analysis and security inspection.</p>
        </div>

        <div class="card">
            <div class="icon">🐙</div>
            <h3>GitHub</h3>
            <p>Source code management and version control.</p>
        </div>

    </div>

    <section class="deployment">

        <h2>Deployment Information</h2>

        <p>
            Deployment Status:
            <span class="status">● Application Online</span>
        </p>

        <div class="details">

            <div class="detail-box">
                <small>Application</small>
                <strong><?php echo htmlspecialchars($appName); ?></strong>
            </div>

            <div class="detail-box">
                <small>Version</small>
                <strong><?php echo htmlspecialchars($version); ?></strong>
            </div>

            <div class="detail-box">
                <small>Environment</small>
                <strong>Docker Container</strong>
            </div>

            <div class="detail-box">
                <small>Deployment</small>
                <strong>CI/CD Ready</strong>
            </div>

        </div>

    </section>

    <footer>
        © 2026 DevOpsLab | Built with PHP, Docker & Jenkins
    </footer>

</div>

</body>
</html>
