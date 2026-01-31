<x-layouts.app title="DigitalWeb - Sublimación Textil">
    <!-- Navbar -->
    <livewire:navbar />
    
    <div class="main-content" style="background: linear-gradient(180deg, #030712 0%, #0a1628 50%, #030712 100%); min-height: 100vh;">
        <!-- Hero Section -->
        <livewire:hero-section />
        
        <div class="section-separator"></div>
        
        <!-- Sublimación Section (Services) -->
        <livewire:services-section />
        
        <div class="section-separator"></div>
        
        <!-- Diseño Section -->
        <livewire:diseno-section />
        
        <div class="section-separator"></div>
        
        <!-- Sistema Section -->
        <livewire:sistema-section />
        
        <div class="section-separator"></div>
        
        <!-- Telas Section -->
        <livewire:telas-section />
        
        <div class="section-separator"></div>
        
        <!-- Papel Section -->
        <livewire:papel-section />
        
        <div class="section-separator"></div>
        
        <!-- DTF Section -->
        <livewire:dtf-section />
        
        <div class="section-separator"></div>
        
        <!-- Mayorista Section -->
        <livewire:mayorista-section />
        
        <div class="section-separator"></div>
        
        <!-- Remeras Section -->
        <livewire:remeras-section />
        
        <!-- Products Section -->
        {{-- <livewire:products-section /> --}}
        
        <div class="section-separator"></div>
        
        <!-- Contact Section -->
        <livewire:contact-section />
        
        <!-- Footer -->
        <livewire:footer-section />
    </div>
    
    <style>
        .section-separator {
            width: 100%;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(6, 182, 212, 0.3) 20%, rgba(168, 85, 247, 0.3) 50%, rgba(6, 182, 212, 0.3) 80%, transparent);
            margin: 4rem 0;
            position: relative;
        }
        
        .section-separator::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 8px;
            height: 8px;
            background: linear-gradient(135deg, #06b6d4, #a855f7);
            border-radius: 50%;
            box-shadow: 0 0 20px rgba(6, 182, 212, 0.5);
        }
        
        @media (max-width: 768px) {
            .section-separator {
                margin: 2rem 0;
            }
        }
    </style>
</x-layouts.app>
