<div align="center">

# Artista Master Academy

**Plataforma de cursos online de Nail Art & Estilismo de Unhas**

![HTML](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)

[ Ver Site ao Vivo](https://www.artistanailpro.pt) · [ Contacto](mailto:info@artistanailpro.pt)

</div>

---

## Sobre o Projecto

Site institucional e catálogo de cursos online da **Artista Master Academy**, uma escola de nail art e estilismo de unhas 100% online. Desenvolvido com HTML, CSS e JavaScript puros — sem frameworks, sem dependências.

**20+ cursos** organizados em 4 categorias: Técnicas do Zero, Nail Art, Aperfeiçoamento e Rosto.

---

## Design

Paleta feminina e elegante inspirada em tons nude rosé e dourado.

| Cor | Hex | Uso |
|-----|-----|-----|
| Rose | `#c9897a` | Cor principal, CTAs |
| Dourado | `#c8a96e` | Destaques, badges |
| Fundo | `#fdf8f5` | Background geral |
| Texto | `#2d1f1a` | Tipografia |

**Fontes:** Cormorant Garamond (display) + DM Sans (corpo)

---

## Estrutura

```
artista-master-academy/
│
├── index.html # Página principal
├── privacidade.html # Política de Privacidade (RGPD)
├── cookies.html # Política de Cookies
├── termos.html # Termos e Condições
├── aviso-legal.html # Aviso Legal
│
├── submit.php # Proxy seguro para Google Sheets
├── config.example.php # Template de configuração (copia para config.php)
│
└── .htaccess # URLs sem extensão .html
```

---

## Funcionalidades

- **Mobile-first** — totalmente responsivo
- **Filtros de cursos** por categoria (Técnica, Nail Art, Aperfeiçoamento, Rosto)
- **Popup de curso** com conteúdos, formato e botão de inscrição via WhatsApp
- **Formulário de newsletter** integrado com Google Sheets
- **Banner de cookies** conforme CNPD 2026
- **Anti-FOUC** — sem saltos visuais no carregamento
- **Páginas legais completas** — RGPD, DL 24/2014, Livro de Reclamações, ODR

---

## Instalação

### 1. Clona o repositório
```bash
git clone https://github.com/teu-usuario/artista-master-academy.git
cd artista-master-academy
```

### 2. Configura as variáveis secretas
```bash
cp config.example.php config.php
```
Abre `config.php` e substitui `SEU_URL_AQUI` pelo URL do teu Google Apps Script.

### 3. Faz upload para o servidor
Copia todos os ficheiros para `public_html` no teu servidor (Hostinger ou outro com suporte PHP).

> **Nunca** faças commit do `config.php` — já está no `.gitignore`.

---

## Dependências Externas

| Serviço | Uso | Gratuito |
|---------|-----|----------|
| Google Fonts | Tipografia (Cormorant + DM Sans) | Sim |
| Google Apps Script | Guardar contactos do formulário | Sim |
| WhatsApp API | Inscrições nos cursos | Sim |

Zero dependências npm. Zero frameworks. Abre directamente no browser.

---

## Conformidade Legal (Portugal)

- RGPD — Política de Privacidade + consentimento explícito
- DL 7/2004 — Identificação completa da entidade
- DL 24/2014 — Direito de arrependimento (excepção conteúdos digitais)
- Lei 46/2012 — Política de Cookies com opt-in/opt-out
- Lei 144/2015 — Livro de Reclamações Electrónico
- DSA 2024 — Termos em linguagem clara
- ODR — Link para plataforma europeia de resolução de litígios

---

## Desenvolvido com

- **HTML5** semântico
- **CSS3** com variáveis nativas (sem preprocessador)
- **JavaScript** vanilla (sem jQuery, sem React)
- **PHP** para proxy seguro do formulário
- **Google Apps Script** como backend leve

---

<div align="center">

Feito por [Artista Master Academy](https://www.artistanailpro.pt)

</div>
