<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veloura Studio</title>
    <style>
        :root {
            --bg: #140d14;
            --bg-2: #1d121d;
            --panel: #1c1a1f;
            --panel-2: #241f29;
            --gold: #d9b36a;
            --rose: #f2b4c8;
            --white: #f9f3ee;
            --muted: #d2c8cf;
            --line: rgba(255,255,255,0.08);
            --shadow: 0 20px 50px rgba(0,0,0,0.28);
            --success: #5ed1a0;
        }

        * { box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(135deg, var(--bg), var(--bg-2));
            color: var(--white);
            line-height: 1.6;
        }

        a { text-decoration: none; color: inherit; }
        img { max-width: 100%; display: block; }

        .container {
            width: min(1180px, calc(100% - 28px));
            margin: 0 auto;
        }

        .topbar {
            position: sticky;
            top: 0;
            z-index: 30;
            background: rgba(20, 13, 20, 0.8);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid var(--line);
        }

        .nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            min-height: 74px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 700;
            letter-spacing: 0.14em;
            text-transform: uppercase;
        }

        .brand-mark {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: grid;
            place-items: center;
            background: linear-gradient(135deg, var(--gold), var(--rose));
            color: #1d121d;
            font-weight: 900;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 22px;
            color: var(--muted);
            font-size: 0.95rem;
        }

        .nav-links a:hover { color: var(--white); }

        .nav-actions {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .cart-pill {
            position: relative;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 44px;
            height: 44px;
            border-radius: 50%;
            border: 1px solid var(--line);
            background: rgba(255,255,255,0.02);
            font-size: 1.2rem;
        }

        .cart-count {
            position: absolute;
            right: -4px;
            top: -4px;
            min-width: 20px;
            height: 20px;
            padding: 0 6px;
            border-radius: 999px;
            background: var(--gold);
            color: #140d14;
            font-size: 0.72rem;
            font-weight: 700;
            display: grid;
            place-items: center;
        }

        .button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 0.9rem 1.4rem;
            border-radius: 999px;
            border: 1px solid transparent;
            font-weight: 700;
            cursor: pointer;
            transition: 0.2s ease;
        }
        .button:hover { transform: translateY(-1px); }

        .button.primary {
            background: linear-gradient(135deg, var(--gold), var(--rose));
            color: #1a1118;
            box-shadow: 0 15px 30px rgba(217,179,106,0.2);
        }

        .button.secondary {
            border-color: var(--line);
            background: rgba(255,255,255,0.02);
            color: var(--white);
        }

        .hero {
            padding: 68px 0 44px;
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1.1fr 0.9fr;
            gap: 36px;
            align-items: center;
        }

        .eyebrow {
            display: inline-block;
            padding: 0.55rem 0.8rem;
            border: 1px solid rgba(217,179,106,0.35);
            background: rgba(217,179,106,0.08);
            color: var(--gold);
            border-radius: 999px;
            font-size: 0.72rem;
            letter-spacing: 0.12em;
            text-transform: uppercase;
        }

        h1 {
            font-size: clamp(2.5rem, 6vw, 5rem);
            line-height: 0.98;
            margin: 18px 0 14px;
            letter-spacing: -0.06em;
        }

        .highlight {
            background: linear-gradient(125deg, var(--gold), var(--rose));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .subtitle {
            color: var(--muted);
            font-size: 1.08rem;
            max-width: 580px;
        }

        .cta-row {
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
            margin-top: 28px;
        }

        .stats {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            margin-top: 28px;
        }

        .stat {
            min-width: 118px;
        }
        .stat strong {
            display: block;
            font-size: 1.8rem;
            letter-spacing: -0.04em;
        }
        .stat span {
            color: var(--muted);
            font-size: 0.82rem;
        }

        .hero-card {
            position: relative;
            background: linear-gradient(160deg, rgba(255,255,255,0.04), rgba(255,255,255,0.02));
            border: 1px solid var(--line);
            border-radius: 28px;
            padding: 20px;
            box-shadow: var(--shadow);
        }

        .hero-card::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(217,179,106,0.12), transparent 38%, rgba(242,180,200,0.07));
        }

        .card-inner {
            position: relative;
            z-index: 1;
        }

        .mini-window {
            display: flex;
            align-items: center;
            gap: 8px;
            padding-bottom: 16px;
        }
        .mini-window span {
            width: 11px; height: 11px; border-radius: 50%;
            display: inline-block;
        }
        .mini-window span:nth-child(1) { background: #f87171; }
        .mini-window span:nth-child(2) { background: #fbbf24; }
        .mini-window span:nth-child(3) { background: #4ade80; }

        .product-showcase {
            background: rgba(255,255,255,0.02);
            border: 1px solid var(--line);
            border-radius: 24px;
            padding: 18px;
            margin-top: 18px;
        }

        .product-showcase .row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
        }

        .mini-box {
            background: rgba(255,255,255,0.02);
            border: 1px solid var(--line);
            border-radius: 18px;
            padding: 18px;
        }
        .mini-box strong {
            display: block;
            font-size: 1.8rem;
            margin-top: 10px;
            letter-spacing: -0.04em;
        }

        .section {
            padding: 76px 0;
        }

        .section-header {
            text-align: center;
            max-width: 760px;
            margin: 0 auto 36px;
        }

        .section-header h2 {
            font-size: clamp(2rem, 4vw, 3rem);
            letter-spacing: -0.05em;
            margin: 16px 0 10px;
        }

        .section-header p {
            color: var(--muted);
            margin: 0;
        }

        .filter-bar {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 12px;
            margin-bottom: 28px;
        }

        .filter-btn {
            border: 1px solid var(--line);
            background: rgba(255,255,255,0.02);
            color: var(--white);
            padding: 0.8rem 1.2rem;
            border-radius: 999px;
            cursor: pointer;
            font-weight: 700;
            transition: 0.2s ease;
        }

        .filter-btn.active {
            background: linear-gradient(135deg, var(--gold), var(--rose));
            color: #170d12;
            border-color: transparent;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 22px;
        }

        .product-card {
            background: rgba(255,255,255,0.02);
            border: 1px solid var(--line);
            border-radius: 24px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: transform 0.2s ease, border-color 0.2s ease;
        }

        .product-card:hover {
            transform: translateY(-4px);
            border-color: rgba(217,179,106,0.4);
        }

        .product-image {
            height: 275px;
            background: linear-gradient(135deg, rgba(217,179,106,0.18), rgba(242,180,200,0.2));
            display: grid;
            place-items: center;
            font-size: 5rem;
        }

        .product-body {
            padding: 18px 18px 20px;
        }

        .product-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 8px;
            margin-bottom: 14px;
        }

        .tag {
            border: 1px solid rgba(242,180,200,0.25);
            color: var(--rose);
            background: rgba(242,180,200,0.06);
            border-radius: 999px;
            padding: 0.3rem 0.6rem;
            font-size: 0.72rem;
            text-transform: uppercase;
            letter-spacing: 0.08em;
        }

        .product-name {
            font-size: 1.35rem;
            margin: 0 0 8px;
        }

        .product-description {
            color: var(--muted);
            margin: 0 0 16px;
            min-height: 46px;
        }

        .product-footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
        }

        .price {
            font-size: 1.5rem;
            font-weight: 700;
            letter-spacing: -0.04em;
        }

        .buy-btn {
            background: linear-gradient(135deg, var(--gold), var(--rose));
            border: none;
            color: #170d12;
            border-radius: 999px;
            padding: 0.75rem 1rem;
            font-weight: 800;
            cursor: pointer;
        }

        .features-strip {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 18px;
        }

        .feature-item {
            background: rgba(255,255,255,0.02);
            border: 1px solid var(--line);
            border-radius: 22px;
            padding: 22px 18px;
        }

        .feature-item strong {
            display: block;
            margin-bottom: 8px;
            font-size: 1.1rem;
        }
        .feature-item p {
            color: var(--muted);
            margin: 0;
        }

        .banner {
            background: linear-gradient(135deg, rgba(217,179,106,0.12), rgba(242,180,200,0.08));
            border: 1px solid var(--line);
            border-radius: 26px;
            padding: 26px 28px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        .banner h3 {
            margin: 0 0 8px;
            font-size: clamp(1.8rem, 4vw, 2.6rem);
            letter-spacing: -0.05em;
        }
        .banner p {
            margin: 0;
            color: var(--muted);
        }

        footer {
            border-top: 1px solid var(--line);
            padding: 26px 0 54px;
            color: var(--muted);
        }

        .footer-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 14px;
            flex-wrap: wrap;
        }

        @media (max-width: 900px) {
            .hero-grid,
            .products-grid,
            .features-strip {
                grid-template-columns: 1fr;
            }

            .nav-links { display: none; }
        }

        @media (max-width: 620px) {
            .nav {
                flex-wrap: wrap;
                gap: 12px;
                padding: 12px 0;
            }
            .nav-actions { width: 100%; justify-content: space-between; }
            .cta-row { flex-direction: column; align-items: stretch; }
            .button { width: 100%; }
            .banner { flex-direction: column; align-items: flex-start; }
        }
    </style>
</head>
<body>
    <header class="topbar">
        <div class="container nav">
            <a href="#top" class="brand" aria-label="Veloura Studio">
                <span class="brand-mark">V</span>
                <span>Veloura</span>
            </a>

            <nav class="nav-links" aria-label="Menu principal">
                <a href="#colecao">Coleção</a>
                <a href="#loja">Loja</a>
                <a href="#diferenciais">Diferenciais</a>
                <a href="#contato">Contato</a>
            </nav>

            <div class="nav-actions">
                <button class="cart-pill" aria-label="Carrinho de compras">
                    🛍️
                    <span class="cart-count" id="cartCount">0</span>
                </button>
                <a class="button secondary" href="#loja">Loja</a>
            </div>
        </div>
    </header>

    <main id="top">
        <section class="hero">
            <div class="container hero-grid">
                <div>
                    <span class="eyebrow">Moda premium</span>
                    <h1>Estilo que fala <span class="highlight">por você</span>.</h1>
                    <p class="subtitle">Coleções selecionadas para homens e mulheres que gostam de sofisticação, conforto e presença marcante no dia a dia.</p>

                    <div class="cta-row">
                        <a class="button primary" href="#loja">Ver coleção</a>
                        <a class="button secondary" href="#diferenciais">Nossa diferença</a>
                    </div>

                    <div class="stats">
                        <div class="stat">
                            <strong>12k</strong>
                            <span>Clientes</span>
                        </div>
                        <div class="stat">
                            <strong>4.9/5</strong>
                            <span>Avaliação</span>
                        </div>
                        <div class="stat">
                            <strong>48h</strong>
                            <span>Entrega</span>
                        </div>
                    </div>
                </div>

                <div class="hero-card">
                    <div class="card-inner">
                        <div class="mini-window">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>

                        <div class="product-showcase">
                            <div class="row">
                                <div class="mini-box">
                                    <small>Nova peça</small>
                                    <strong>R$ 299</strong>
                                </div>
                                <div class="mini-box">
                                    <small>Popular</small>
                                    <strong>R$ 189</strong>
                                </div>
                            </div>
                        </div>

                        <div style="height: 14px;"></div>

                        <div class="product-showcase">
                            <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:10px;">
                                <span style="color: var(--muted);">Best sellers</span>
                                <span class="tag">+28%</span>
                            </div>
                            <div style="display:grid; gap:14px;">
                                <div style="display:flex; justify-content:space-between; align-items:center; background: rgba(255,255,255,0.02); border:1px solid var(--line); border-radius:16px; padding:12px 14px;">
                                    <div>
                                        <strong>Blazer</strong><br>
                                        <small style="color: var(--muted);">Masculino</small>
                                    </div>
                                    <span>R$ 420</span>
                                </div>
                                <div style="display:flex; justify-content:space-between; align-items:center; background: rgba(255,255,255,0.02); border:1px solid var(--line); border-radius:16px; padding:12px 14px;">
                                    <div>
                                        <strong>Trench</strong><br>
                                        <small style="color: var(--muted);">Feminino</small>
                                    </div>
                                    <span>R$ 360</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section" id="loja">
            <div class="container">
                <div class="section-header">
                    <span class="eyebrow">Coleção</span>
                    <h2>Confecção para todos os estilos.</h2>
                    <p>Explore peças masculinas e femininas em uma loja simples, moderna e dinâmica.</p>
                </div>

                <div class="filter-bar" aria-label="Filtros de gênero">
                    <button class="filter-btn active" type="button" data-filter="all">Todos</button>
                    <button class="filter-btn" type="button" data-filter="masculino">Masculino</button>
                    <button class="filter-btn" type="button" data-filter="feminino">Feminino</button>
                </div>

                <div class="products-grid" id="productsGrid"></div>
            </div>
        </section>

        <section class="section" id="diferenciais">
            <div class="container">
                <div class="section-header">
                    <span class="eyebrow">Diferenciais</span>
                    <h2>Qualidade, conforto e presença em um só clique.</h2>
                </div>

                <div class="features-strip">
                    <div class="feature-item">
                        <strong>Material premium</strong>
                        <p>Peças com acabamento refinado e tecido de alta qualidade.</p>
                    </div>
                    <div class="feature-item">
                        <strong>Entrega rápida</strong>
                        <p>Envio eficiente para todo o Brasil em poucos dias úteis.</p>
                    </div>
                    <div class="feature-item">
                        <strong>Estilo versátil</strong>
                        <p>Looks que atendem ao masculino e ao feminino com personalidade.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section" id="contato">
            <div class="container">
                <div class="banner">
                    <div>
                        <h3>Seu próximo look começa aqui.</h3>
                        <p>Descubra peças sofisticadas para o seu estilo e aproveite a nova coleção.</p>
                    </div>
                    <a class="button primary" href="mailto:contato@velourastudio.com.br">contato@velourastudio.com.br</a>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container footer-row">
            <div class="brand">
                <span class="brand-mark">V</span>
                <span>Veloura</span>
            </div>
            <span>© <?php echo date('Y'); ?> Veloura Studio. Todos os direitos reservados.</span>
        </div>
    </footer>

    <script>
        const products = [
            { name: 'Blazer Clássico', gender: 'masculino', price: 420, emoji: '🧥', tag: 'Essencial', description: 'Corte impecável para compor um visual sofisticado.' },
            { name: 'Camisa Premium', gender: 'masculino', price: 180, emoji: '👔', tag: 'Novo', description: 'Linha elegante com caimento refinado e conforto diário.' },
            { name: 'Calça Slim', gender: 'masculino', price: 220, emoji: '👖', tag: 'Popular', description: 'Modelagem moderna para uma silhueta impecável.' },
            { name: 'Vestido Midi', gender: 'feminino', price: 260, emoji: '👗', tag: 'Hit', description: 'Textura leve e visual elegante para qualquer ocasião.' },
            { name: 'Bolsa Clássica', gender: 'feminino', price: 210, emoji: '👜', tag: 'Top', description: 'Detalhes refinados e acabamento premium para o dia a dia.' },
            { name: 'Blusa de Encosto', gender: 'feminino', price: 170, emoji: '👚', tag: 'Novo', description: 'Leve, sofisticada e confortável para compor diversos looks.' }
        ];

        const productGrid = document.getElementById('productsGrid');
        const filterButtons = document.querySelectorAll('.filter-btn');
        const cartCount = document.getElementById('cartCount');
        let cartItems = 0;

        function renderProducts(filter = 'all') {
            const filteredProducts = filter === 'all'
                ? products
                : products.filter(product => product.gender === filter);

            productGrid.innerHTML = filteredProducts.map(product => `
                <article class="product-card">
                    <div class="product-image" aria-label="${product.name}">${product.emoji}</div>
                    <div class="product-body">
                        <div class="product-meta">
                            <span class="tag">${product.tag}</span>
                            <span style="color: var(--muted); text-transform: capitalize;">${product.gender}</span>
                        </div>
                        <h3 class="product-name">${product.name}</h3>
                        <p class="product-description">${product.description}</p>
                        <div class="product-footer">
                            <span class="price">R$ ${product.price}</span>
                            <button class="buy-btn" type="button" data-name="${product.name}">Comprar</button>
                        </div>
                    </div>
                </article>
            `).join('');

            document.querySelectorAll('.buy-btn').forEach(button => {
                button.addEventListener('click', () => {
                    cartItems += 1;
                    cartCount.textContent = cartItems;
                    button.textContent = 'Adicionado';
                    setTimeout(() => { button.textContent = 'Comprar'; }, 800);
                });
            });
        }

        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                filterButtons.forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');
                renderProducts(button.dataset.filter);
            });
        });

        renderProducts();
    </script>
</body>
</html>
