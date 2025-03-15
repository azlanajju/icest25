<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICEST 2025 - Launch</title>
    <link rel="icon" href="../images/logos/Conclave_Logo.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;700&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(135deg, #000000, #1a1a2e);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Roboto', sans-serif;
            overflow: hidden;
            color: #fff;
        }

        .launch-container {
            text-align: center;
            position: relative;
            z-index: 1;
            padding: 2rem;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 40px rgba(0, 0, 0, 0.3);
            animation: containerPulse 3s infinite ease-in-out;
        }

        @keyframes containerPulse {
            0% {
                box-shadow: 0 0 40px rgba(0, 0, 0, 0.3);
            }

            50% {
                box-shadow: 0 0 60px rgba(0, 128, 255, 0.2);
            }

            100% {
                box-shadow: 0 0 40px rgba(0, 0, 0, 0.3);
            }
        }

        .logo {
            max-width: 300px;
            margin-bottom: 2rem;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 1s ease forwards;
            filter: drop-shadow(0 0 10px rgba(255, 255, 255, 0.3));
        }

        .launch-title {
            font-family: 'Orbitron', sans-serif;
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            background: linear-gradient(45deg, #fff, #64ffda);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 1s ease 0.3s forwards;
        }

        .launch-subtitle {
            font-size: 1.1rem;
            margin-bottom: 2rem;
            color: #a0a0a0;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 1s ease 0.6s forwards;
        }

        .launch-button {
            padding: 20px 50px;
            font-size: 24px;
            font-family: 'Orbitron', sans-serif;
            background: transparent;
            color: #fff;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 1s ease 0.9s forwards;
            letter-spacing: 2px;
        }

        .launch-button::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 0;
            height: 0;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            transition: all 0.6s ease;
        }

        .launch-button:hover {
            background: rgba(255, 255, 255, 0.1);
            border-color: #64ffda;
            box-shadow: 0 0 20px rgba(100, 255, 218, 0.3);
            transform: translateY(-2px);
        }

        .launch-button:hover::before {
            width: 300px;
            height: 300px;
            opacity: 0;
        }

        .countdown {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.95);
            display: none;
            justify-content: center;
            align-items: center;
            font-family: 'Orbitron', sans-serif;
            font-size: 180px;
            color: #64ffda;
            z-index: 100;
            text-shadow: 0 0 20px rgba(100, 255, 218, 0.5);
        }

        .particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 0;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .particle {
            position: absolute;
            background: linear-gradient(45deg, #64ffda, #0099ff);
            border-radius: 50%;
            animation: float 3s infinite linear;
        }

        @keyframes float {
            0% {
                transform: translateY(0) scale(1);
                opacity: 1;
            }

            100% {
                transform: translateY(-100vh) scale(0);
                opacity: 0;
            }
        }

        .grid {
            position: fixed;
            width: 100%;
            height: 100%;
            background:
                linear-gradient(rgba(100, 255, 218, 0.1) 1px, transparent 1px),
                linear-gradient(90deg, rgba(100, 255, 218, 0.1) 1px, transparent 1px);
            background-size: 40px 40px;
            z-index: -1;
            opacity: 0.2;
        }
    </style>
</head>

<body>
    <div class="grid"></div>
    <div class="particles" id="particles"></div>

    <div class="launch-container">
        <img src="../images/logos/ICEST_Logo.png" alt="ICEST Logo" class="logo">
        <h1 class="launch-title">ICEST 2025</h1>
        <p class="launch-subtitle">International Conclave on Engineering Sciences and Technology</p>
        <button class="launch-button" onclick="startLaunch()">INITIATE LAUNCH</button>
    </div>

    <div class="countdown" id="countdown"></div>

    <script>
        function createParticles() {
            const container = document.getElementById('particles');
            for (let i = 0; i < 30; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';
                particle.style.left = Math.random() * 100 + '%';
                particle.style.width = Math.random() * 3 + 1 + 'px';
                particle.style.height = particle.style.width;
                particle.style.animationDelay = Math.random() * 3 + 's';
                particle.style.animationDuration = Math.random() * 2 + 2 + 's';
                container.appendChild(particle);
            }
        }

        function startLaunch() {
            const countdown = document.getElementById('countdown');
            countdown.style.display = 'flex';
            let count = 5;

            const countInterval = setInterval(() => {
                if (count > 0) {
                    countdown.innerHTML = `<div style="position: relative;">
                        <div style="position: absolute; top: -30px; left: 50%; transform: translateX(-50%); font-size: 24px; opacity: 0.7;">T-MINUS</div>
                        ${count}
                        <div style="position: absolute; bottom: -30px; left: 50%; transform: translateX(-50%); font-size: 24px; opacity: 0.7;">SECONDS</div>
                    </div>`;
                    count--;
                } else {
                    clearInterval(countInterval);
                    countdown.innerHTML = `<div style="text-align: center;">
                        <div style="font-size: 60px;">LAUNCHING</div>
                        <div style="font-size: 24px; margin-top: 20px;">Initiating web parts...</div>
                    </div>`;
                    setTimeout(() => {
                        window.location.href = 'launch.php';
                    }, 2000);
                }
            }, 1000);
        }

        // Initialize particles on load
        window.addEventListener('load', createParticles);

        // Recreate particles periodically
        setInterval(() => {
            const container = document.getElementById('particles');
            container.innerHTML = '';
            createParticles();
        }, 6000);
    </script>
</body>

</html>