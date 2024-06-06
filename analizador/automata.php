<?php
function generate_automata_html() {
    return '
    <div class="automata">
        <svg width="1000" height="400">
            <!-- States -->
            <circle cx="100" cy="200" r="30" fill="#3498db" />
            <text x="100" y="205" text-anchor="middle" fill="white" font-weight="bold">S0</text>
            
            <circle cx="300" cy="200" r="30" fill="#3498db" />
            <text x="300" y="205" text-anchor="middle" fill="white" font-weight="bold">S1</text>

            <circle cx="500" cy="200" r="30" fill="#3498db" />
            <text x="500" y="205" text-anchor="middle" fill="white" font-weight="bold">S2</text>

            <circle cx="700" cy="200" r="30" fill="#3498db" />
            <text x="700" y="205" text-anchor="middle" fill="white" font-weight="bold">S3</text>

            <circle cx="900" cy="200" r="30" fill="#3498db" />
            <text x="900" y="205" text-anchor="middle" fill="white" font-weight="bold">S4</text>

            <!-- Error States -->
            <circle cx="300" cy="350" r="30" fill="red" />
            <text x="300" y="355" text-anchor="middle" fill="white" font-weight="bold">Error Léxico</text>

            <circle cx="500" cy="350" r="30" fill="red" />
            <text x="500" y="355" text-anchor="middle" fill="white" font-weight="bold">Error Sintáctico</text>

            <!-- Transitions -->
            <line x1="130" y1="200" x2="270" y2="200" stroke="black" stroke-width="2" marker-end="url(#arrowhead)" />
            <text x="200" y="190" fill="black" font-weight="bold">Tokens válidos</text>
            
            <line x1="330" y1="200" x2="470" y2="200" stroke="black" stroke-width="2" marker-end="url(#arrowhead)" />
            <text x="400" y="190" fill="black" font-weight="bold">Análisis válido</text>

            <line x1="530" y1="200" x2="670" y2="200" stroke="black" stroke-width="2" marker-end="url(#arrowhead)" />
            <text x="600" y="190" fill="black" font-weight="bold">Resultado</text>

            <line x1="730" y1="200" x2="870" y2="200" stroke="black" stroke-width="2" marker-end="url(#arrowhead)" />
            <text x="800" y="190" fill="black" font-weight="bold">Fin</text>

            <!-- Error Transitions -->
            <line x1="300" y1="230" x2="300" y2="320" stroke="black" stroke-width="2" marker-end="url(#arrowhead)" />
            <text x="315" y="275" fill="black" font-weight="bold">Error léxico</text>

            <line x1="500" y1="230" x2="500" y2="320" stroke="black" stroke-width="2" marker-end="url(#arrowhead)" />
            <text x="515" y="275" fill="black" font-weight="bold">Error sintáctico</text>

            <!-- Arrow head marker -->
            <defs>
                <marker id="arrowhead" markerWidth="10" markerHeight="7" refX="0" refY="3.5" orient="auto">
                    <polygon points="0 0, 10 3.5, 0 7" fill="black" />
                </marker>
            </defs>
        </svg>
    </div>';
}
?>
