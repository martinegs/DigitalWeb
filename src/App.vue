<template>
  <router-view />
</template>

<script setup>
console.log('App.vue cargado')
</script>

<style>
@import url('https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap');

:root {
  --primary-gradient: linear-gradient(135deg, #06b6d4 0%, #8b5cf6 50%, #ec4899 100%);
  --glass-bg: rgba(255, 255, 255, 0.03);
  --glass-border: rgba(255, 255, 255, 0.08);
  --glow-cyan: 0 0 40px rgba(6, 182, 212, 0.3);
  --glow-purple: 0 0 40px rgba(139, 92, 246, 0.3);
  --text-primary: #f8fafc;
  --text-secondary: #94a3b8;
  --bg-dark: #030712;
  --bg-card: #0f172a;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
  background: #0f172a;
  color: var(--text-primary);
  overflow-x: hidden;
}

h1, h2, h3, h4, h5, h6 {
  font-family: 'Space Grotesk', sans-serif;
}

#app {
  min-height: 100vh;
}

.app {
  scroll-behavior: smooth;
  background: #0f172a;
  min-height: 100vh;
  padding-top: 70px;
  position: relative;
}

/* Professional background pattern */
.app::before {
  content: '';
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: 
    radial-gradient(ellipse 100% 80% at 10% 0%, rgba(6, 182, 212, 0.07), transparent 50%),
    radial-gradient(ellipse 80% 60% at 90% 20%, rgba(37, 99, 235, 0.05), transparent 50%),
    radial-gradient(ellipse 60% 40% at 50% 100%, rgba(139, 92, 246, 0.04), transparent 50%);
  pointer-events: none;
  z-index: 0;
}

/* Subtle grid pattern overlay */
.app::after {
  content: '';
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-image: 
    linear-gradient(rgba(6, 182, 212, 0.03) 1px, transparent 1px),
    linear-gradient(90deg, rgba(6, 182, 212, 0.03) 1px, transparent 1px);
  background-size: 60px 60px;
  pointer-events: none;
  z-index: 0;
  opacity: 0.5;
}

/* Reduced spacing between sections */
.app section {
  margin-bottom: 0;
  background: transparent !important;
  position: relative;
  z-index: 1;
}

/* Línea separadora entre secciones - solo entre secciones, no al final */
.app section:not(:last-child)::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  width: 60%;
  max-width: 800px;
  height: 1px;
  background: linear-gradient(90deg, 
    transparent 0%, 
    rgba(6, 182, 212, 0.6) 25%, 
    rgba(37, 99, 235, 0.8) 50%, 
    rgba(6, 182, 212, 0.6) 75%, 
    transparent 100%
  );
  box-shadow: 
    0 0 8px rgba(6, 182, 212, 0.4),
    0 0 16px rgba(6, 182, 212, 0.2);
}

/* Custom scrollbar */
::-webkit-scrollbar {
  width: 8px;
}

::-webkit-scrollbar-track {
  background: var(--bg-dark);
}

::-webkit-scrollbar-thumb {
  background: linear-gradient(180deg, #06b6d4, #8b5cf6);
  border-radius: 4px;
}

/* Glass card style */
.glass-card {
  background: var(--glass-bg);
  backdrop-filter: blur(20px);
  -webkit-backdrop-filter: blur(20px);
  border: 1px solid var(--glass-border);
  border-radius: 24px;
  transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}

.glass-card:hover {
  border-color: rgba(6, 182, 212, 0.3);
  box-shadow: var(--glow-cyan);
  transform: translateY(-4px);
}

/* Gradient text */
.gradient-text {
  background: var(--primary-gradient);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}

/* Animated border gradient */
.gradient-border {
  position: relative;
  background: var(--bg-card);
  border-radius: 24px;
}

.gradient-border::before {
  content: '';
  position: absolute;
  top: -2px;
  left: -2px;
  right: -2px;
  bottom: -2px;
  background: var(--primary-gradient);
  border-radius: 26px;
  z-index: -1;
  opacity: 0;
  transition: opacity 0.4s ease;
}

.gradient-border:hover::before {
  opacity: 1;
}

/* Neon button */
.neon-button {
  background: linear-gradient(135deg, #06b6d4 0%, #8b5cf6 100%);
  border: none;
  padding: 16px 32px;
  border-radius: 50px;
  color: white;
  font-weight: 600;
  font-size: 1rem;
  cursor: pointer;
  position: relative;
  overflow: hidden;
  transition: all 0.3s ease;
  box-shadow: 0 4px 20px rgba(6, 182, 212, 0.4);
}

.neon-button:hover {
  transform: translateY(-2px);
  box-shadow: 0 8px 30px rgba(6, 182, 212, 0.6);
}

.neon-button::before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
  transition: left 0.5s ease;
}

.neon-button:hover::before {
  left: 100%;
}

/* Floating animation */
@keyframes float {
  0%, 100% { transform: translateY(0); }
  50% { transform: translateY(-10px); }
}

.float-animation {
  animation: float 3s ease-in-out infinite;
}

/* Pulse glow animation */
@keyframes pulse-glow {
  0%, 100% { box-shadow: 0 0 20px rgba(6, 182, 212, 0.3); }
  50% { box-shadow: 0 0 40px rgba(6, 182, 212, 0.6); }
}

/* Section divider */
.section-divider {
  height: 1px;
  background: linear-gradient(90deg, transparent, rgba(6, 182, 212, 0.5), rgba(139, 92, 246, 0.5), transparent);
  margin: 0 auto;
  max-width: 600px;
}

/* Icon container with glow */
.icon-glow {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 64px;
  height: 64px;
  border-radius: 16px;
  background: linear-gradient(135deg, rgba(6, 182, 212, 0.2), rgba(139, 92, 246, 0.2));
  border: 1px solid rgba(6, 182, 212, 0.3);
  font-size: 1.8rem;
  margin-bottom: 1rem;
  transition: all 0.3s ease;
}

.icon-glow:hover {
  transform: scale(1.1);
  box-shadow: 0 0 30px rgba(6, 182, 212, 0.5);
}

/* Stats counter style */
.stat-number {
  font-family: 'Space Grotesk', sans-serif;
  font-size: 3rem;
  font-weight: 700;
  background: var(--primary-gradient);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

/* Override Bootstrap cards */
.card {
  background: rgba(15, 23, 42, 0.8) !important;
  backdrop-filter: blur(20px);
  border: 1px solid rgba(255, 255, 255, 0.05) !important;
  border-radius: 20px !important;
  transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1) !important;
}

.card:hover {
  border-color: rgba(6, 182, 212, 0.4) !important;
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4), 0 0 40px rgba(6, 182, 212, 0.15) !important;
  transform: translateY(-8px) !important;
}

.card .card-body {
  position: relative;
  z-index: 1;
}

/* Section titles */
.section-title {
  font-family: 'Space Grotesk', sans-serif;
  font-size: 3rem;
  font-weight: 700;
  margin-bottom: 1rem;
}

.section-subtitle {
  color: var(--text-secondary);
  font-size: 1.1rem;
  max-width: 700px;
  margin: 0 auto;
}

/* Responsive adjustments */
@media (max-width: 768px) {
  .section-title {
    font-size: 2rem;
  }
  
  .stat-number {
    font-size: 2rem;
  }
}
</style>
