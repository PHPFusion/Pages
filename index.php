<?php
$asset = 'assets/';

header('X-Robots-Tag: noindex, nofollow, noarchive, nosnippet, noimageindex', true);
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0', true);
header('Pragma: no-cache', true);
header('Expires: 0', true);

function e($value)
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHPFusion 10 - Self-hosted PHP platform</title>
    <meta name="description" content="PHPFusion 10 is a modular, self-hosted PHP platform for content, administration, AI workflows, themes, and installable infusions.">
    <meta name="robots" content="noindex, nofollow, noarchive, nosnippet, noimageindex">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= e($asset) ?>css/tailwind.output.css">
    <style>
        @property --platform-glow-x {
            syntax: "<percentage>";
            inherits: false;
            initial-value: 16%;
        }

        :root {
            --bg: #030304;
            --bg-raised: #08090d;
            --bg-soft: #10131a;
            --panel: rgba(255, 255, 255, .055);
            --panel-strong: rgba(255, 255, 255, .09);
            --line: rgba(255, 255, 255, .12);
            --line-strong: rgba(255, 255, 255, .22);
            --text: #f7f8ff;
            --muted: rgba(247, 248, 255, .68);
            --dim: rgba(247, 248, 255, .46);
            --violet: #8b5cf6;
            --blue: #3b82f6;
            --cyan: #22d3ee;
            --amber: #f4a261;
            --green: #6ee7b7;
            --radius: 22px;
            --ease: cubic-bezier(.2, .8, .2, 1);
            --section-content-width: 1254px;
            --section-title-inset: clamp(6px, 1vw, 14px);
            --section-pad-block: clamp(84px, 7vw, 100px);
            color-scheme: dark;
        }

        * { box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body {
            margin: 0;
            min-width: 320px;
            background: var(--bg);
            color: var(--text);
            font-family: "Inter", "Segoe UI Variable", "Segoe UI", ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, sans-serif;
            letter-spacing: 0;
            overflow-x: hidden;
        }
        body::before {
            content: "";
            position: fixed;
            inset: 0;
            z-index: -3;
            background:
                radial-gradient(circle at 18% 12%, rgba(139, 92, 246, .17), transparent 32rem),
                radial-gradient(circle at 82% 10%, rgba(34, 211, 238, .14), transparent 34rem),
                linear-gradient(180deg, #040406 0%, #07080b 42%, #030304 100%);
        }
        body::after {
            content: "";
            position: fixed;
            inset: 0;
            z-index: -2;
            pointer-events: none;
            opacity: .18;
            background-image:
                linear-gradient(rgba(255,255,255,.04) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255,255,255,.035) 1px, transparent 1px);
            background-size: 72px 72px;
            mask-image: linear-gradient(to bottom, #000 0%, transparent 78%);
        }
        a { color: inherit; text-decoration: none; }
        img, video { display: block; max-width: 100%; }
        button { font: inherit; }

        .shell { width: min(1440px, calc(100% - 40px)); margin-inline: auto; }
        .section {
            padding-block: var(--section-pad-block) !important;
            scroll-margin-top: 24px;
        }
        .content-frame {
            width: min(var(--section-content-width), 100%);
            margin-inline: auto;
            padding-inline: var(--section-title-inset);
        }
        .light-section {
            color: #080a10;
        }
        .light-section::before {
            content: "";
            position: absolute;
            inset: 0 auto 0 50%;
            z-index: 0;
            width: 100vw;
            transform: translateX(-50%);
            background:
                radial-gradient(circle at 82% 14%, rgba(59, 130, 246, .16), transparent 30rem),
                radial-gradient(circle at 14% 82%, rgba(139, 92, 246, .11), transparent 34rem),
                linear-gradient(180deg, #f9fafc 0%, #eef2f7 58%, #ffffff 100%);
            box-shadow:
                inset 0 1px 0 rgba(255,255,255,.92),
                inset 0 -1px 0 rgba(3,3,4,.08);
        }
        .light-section::after {
            content: "";
            position: absolute;
            inset: 0 auto 0 50%;
            z-index: 0;
            width: 100vw;
            transform: translateX(-50%);
            pointer-events: none;
            opacity: .45;
            background-image:
                linear-gradient(rgba(8,10,16,.055) 1px, transparent 1px),
                linear-gradient(90deg, rgba(8,10,16,.045) 1px, transparent 1px);
            background-size: 80px 80px;
            mask-image: linear-gradient(90deg, transparent 0%, #000 12%, #000 88%, transparent 100%);
        }
        .light-section .eyebrow {
            border-color: rgba(8,10,16,.12);
            background: rgba(255,255,255,.76);
            color: rgba(8,10,16,.68);
            box-shadow: 0 12px 30px rgba(20, 24, 35, .06);
        }
        .light-section .pulse {
            background: #0f9f72;
            box-shadow: 0 0 18px rgba(15,159,114,.42);
        }
        .light-section .section-head p,
        .light-section .copy-block p,
        .light-section .card p {
            color: rgba(8,10,16,.64);
        }
        .light-section .card {
            border-color: rgba(8,10,16,.095);
            background:
                linear-gradient(180deg, rgba(255,255,255,.92), rgba(255,255,255,.72)),
                rgba(255,255,255,.82);
            box-shadow:
                inset 0 1px 0 rgba(255,255,255,.82),
                0 26px 80px rgba(22, 31, 49, .12);
        }
        .light-section .card:hover {
            border-color: rgba(8,10,16,.18);
            background:
                linear-gradient(180deg, rgba(255,255,255,1), rgba(246,248,252,.86)),
                #fff;
        }
        .light-section .card::before {
            background: rgba(59,130,246,.14);
            opacity: .5;
        }
        .light-section .mini-label,
        .light-section .mini-row small {
            color: rgba(8,10,16,.46);
        }
        .light-section .mini-row {
            border-color: rgba(8,10,16,.09);
            background: rgba(255,255,255,.68);
            color: rgba(8,10,16,.68);
            box-shadow: 0 12px 34px rgba(20, 24, 35, .06);
        }
        .light-section .mini-row strong {
            color: #080a10;
        }
        .light-section .mini-icon {
            background: rgba(59,130,246,.12);
            color: #1f4fd4;
        }
        .light-section .status {
            background: rgba(15,159,114,.12);
            color: #0b6f50;
        }
        .light-section .code-card {
            border-color: rgba(8,10,16,.16);
            background: #070912;
            box-shadow: 0 20px 60px rgba(7,9,18,.22);
        }
        .light-section .core-visual {
            box-shadow: 0 26px 80px rgba(7,9,18,.18);
            border-radius: 18px;
        }
        .light-section .screen {
            border-color: rgba(8,10,16,.12);
            background: rgba(255,255,255,.86);
            box-shadow: 0 30px 90px rgba(22,31,49,.18);
        }
        .light-section .check {
            border-color: rgba(8,10,16,.11);
            background: rgba(255,255,255,.72);
            color: rgba(8,10,16,.72);
            box-shadow: 0 14px 38px rgba(20,24,35,.06);
        }

        .nav {
            position: relative;
            z-index: 50;
            display: flex;
            width: min(var(--section-content-width), calc(100% - 40px));
            min-height: 56px;
            margin: 0 auto;
            align-items: center;
            justify-content: space-between;
            gap: 18px;
            padding-inline: var(--section-title-inset);
        }
        .brand-mark {
            position: relative;
            display: inline-grid;
            width: 30px;
            height: 30px;
            place-items: center;
            border-radius: 10px;
            background: linear-gradient(135deg, rgba(255,255,255,.95), rgba(132, 190, 255, .86));
            color: #030304;
            box-shadow: 0 0 34px rgba(59,130,246,.34);
        }
        .brand-mark::before,
        .brand-mark::after {
            content: "";
            position: absolute;
            width: 9px;
            height: 9px;
            border-radius: 3px;
            background: #030304;
            opacity: .76;
        }
        .brand-mark::before { transform: translate(-5px, -5px); }
        .brand-mark::after { transform: translate(5px, 5px); }
        .mobile-toggle { display: none; }

        .button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            min-height: 44px;
            padding: 0 22px;
            border: 1px solid var(--line);
            border-radius: 999px;
            background: rgba(255,255,255,.055);
            color: var(--text);
            font-size: 13px;
            font-weight: 790;
            letter-spacing: .06em;
            text-transform: uppercase;
            transition: transform .18s var(--ease), border-color .18s var(--ease), background .18s var(--ease), box-shadow .18s var(--ease);
        }
        .button:hover {
            transform: translateY(-1px);
            border-color: rgba(255,255,255,.28);
            background: rgba(255,255,255,.09);
        }
        .button.primary {
            border-color: rgba(255,255,255,.8);
            background:
                radial-gradient(circle at 86% 50%, rgba(244,162,97,.95), transparent 34%),
                linear-gradient(90deg, #f7f8ff, #dbe8ff 68%, #fff7df);
            color: #100b08;
            box-shadow: 0 0 36px rgba(244, 162, 97, .35), 0 14px 48px rgba(0,0,0,.28);
        }
        .button.platform-cta {
            --platform-glow-x: 16%;
            border-color: rgba(210, 218, 226, .94);
            background:
                radial-gradient(ellipse 48% 190% at var(--platform-glow-x) 50%, rgba(234, 249, 255, .8) 0%, rgba(190, 231, 248, .42) 20%, rgba(132, 203, 231, .18) 42%, transparent 70%),
                linear-gradient(102deg, #ffffff 0%, #f4f6f8 48%, #ffffff 100%);
            color: #101820;
            box-shadow:
                0 0 12px rgba(126, 206, 238, .30),
                0 0 30px rgba(94, 180, 222, .16),
                0 14px 40px rgba(0,0,0,.18);
            transition:
                --platform-glow-x .56s cubic-bezier(.16,1,.3,1),
                transform .18s var(--ease),
                border-color .18s var(--ease),
                box-shadow .28s var(--ease);
        }
        .button.platform-cta:hover {
            --platform-glow-x: 84%;
            border-color: rgba(184, 224, 240, .95);
            box-shadow:
                0 0 16px rgba(126, 211, 244, .45),
                0 0 38px rgba(91, 185, 226, .25),
                0 16px 44px rgba(0,0,0,.2);
        }
        .button.icon::after { content: "->"; font-weight: 900; }

        .hero-scene {
            min-height: 100vh;
            background: #090a0c;
            overflow: hidden;
        }
        .hero-media {
            width: auto;
            height: 100%;
            aspect-ratio: 1672 / 940;
        }
        .hero-media::before {
            content: "";
            position: absolute;
            inset: 0;
            z-index: 1;
            background:
                radial-gradient(ellipse 62% 90% at 72% 40%, rgba(39, 220, 239, .10), transparent 58%),
                linear-gradient(90deg, #090a0c 0%, rgba(9,10,12,.52) 13%, transparent 35%, transparent 68%, rgba(9,10,12,.42) 88%, #090a0c 100%),
                radial-gradient(ellipse 96% 106% at 50% 48%, transparent 48%, rgba(9,10,12,.42) 100%);
            pointer-events: none;
        }
        .hero-media::after {
            content: "";
            position: absolute;
            inset: 0;
            z-index: 2;
            background:
                linear-gradient(90deg, rgba(9,10,12,.78) 0%, rgba(9,10,12,.42) 30%, rgba(9,10,12,.02) 64%, rgba(9,10,12,.28) 86%, #090a0c 100%),
                linear-gradient(180deg, rgba(9,10,12,.14) 0%, transparent 44%, #090a0c 100%);
            pointer-events: none;
        }
        .eyebrow {
            display: inline-flex;
            width: fit-content;
            align-items: center;
            gap: 10px;
            min-height: 34px;
            padding: 0 13px;
            border: 1px solid rgba(255,255,255,.13);
            border-radius: 999px;
            background: rgba(255,255,255,.05);
            color: rgba(247,248,255,.76);
            font-family: "Inter", "Segoe UI Variable", "Segoe UI", ui-sans-serif, system-ui, sans-serif;
            font-size: 12px;
        }
        .pulse {
            width: 7px;
            height: 7px;
            border-radius: 999px;
            background: var(--green);
            box-shadow: 0 0 20px rgba(110,231,183,.9);
        }
        h1, h2, h3, p { margin-top: 0; }
        h1, h2, h3, h4 { font-weight: 500 !important; }
        .hero-title {
            position: relative;
            z-index: 30;
            max-width: 616px;
            margin: 24px 0 22px;
            background: linear-gradient(135deg, #fff 0%, #fff 52%, #f8fbff 82%, #fff 100%);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            font-family: "Inter", "Segoe UI Variable", "Segoe UI", ui-sans-serif, system-ui, sans-serif;
            font-size: 84px;
            font-weight: 600;
            line-height: .9;
            letter-spacing: -.025em;
            -webkit-text-fill-color: transparent;
            filter: brightness(1.14) contrast(1.04);
            text-shadow: 0 3px 30px rgba(0,0,0,.36), 0 0 24px rgba(255,255,255,.38);
            text-wrap: balance;
        }
        .hero-title span { display: inline; }
        @media (max-width: 1024px) {
            .hero-title { max-width: 528px; font-size: 72px; }
        }
        @media (max-width: 768px) {
            .hero-title { max-width: 441px; font-size: 56px; }
        }
        .pill {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            min-height: 35px;
            padding: 0 13px;
            border: 1px solid rgba(255,255,255,.11);
            border-radius: 999px;
            background: rgba(255,255,255,.042);
            color: rgba(247,248,255,.68);
            font-family: "Inter", "Segoe UI Variable", "Segoe UI", ui-sans-serif, system-ui, sans-serif;
            font-size: 12px;
        }
        .pill::before {
            content: "";
            width: 6px;
            height: 6px;
            border-radius: 999px;
            background: currentColor;
            opacity: .74;
        }

        .product-stage {
            position: absolute;
            top: 561px;
            left: 50%;
            z-index: 20;
            width: min(1322px, calc(100% - 40px));
            margin: 0;
            transform: translateX(-50%);
            --browser-visible-height: max(0px, calc(max(100vh, 565px) - 581px));
            --browser-fade-start: max(0px, calc(var(--browser-visible-height) - 160px));
            -webkit-mask-image: linear-gradient(to bottom, #000 0, #000 var(--browser-fade-start), transparent var(--browser-visible-height));
            mask-image: linear-gradient(to bottom, #000 0, #000 var(--browser-fade-start), transparent var(--browser-visible-height));
        }
        .product-frame {
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(255,255,255,.19);
            border-radius: 26px;
            background:
                linear-gradient(180deg, rgba(255,255,255,.12), rgba(255,255,255,.035)),
                rgba(8, 9, 13, .88);
            box-shadow:
                inset 0 1px 0 rgba(255,255,255,.14),
                0 36px 120px rgba(0,0,0,.58),
                0 0 70px rgba(59,130,246,.16);
            transform: rotateX(7deg);
            transform-origin: center top;
        }
        .product-frame.imported-product {
            overflow: visible;
            border: 0;
            background: transparent;
            box-shadow: none;
            transform: none;
        }
        .product-frame::before {
            content: "";
            position: absolute;
            inset: -1px;
            pointer-events: none;
            background: linear-gradient(100deg, rgba(139,92,246,.22), transparent 32%, rgba(34,211,238,.18) 62%, rgba(244,162,97,.14));
            opacity: .66;
            mask: linear-gradient(#000 0 0) content-box, linear-gradient(#000 0 0);
            -webkit-mask: linear-gradient(#000 0 0) content-box, linear-gradient(#000 0 0);
            padding: 1px;
            -webkit-mask-composite: xor;
            mask-composite: exclude;
        }
        .product-frame.imported-product::before,
        .product-frame.imported-product .frame-bar,
        .product-frame.imported-product .product-caption {
            display: none;
        }
        .frame-bar {
            display: flex;
            align-items: center;
            gap: 8px;
            min-height: 42px;
            padding: 0 17px;
            border-bottom: 1px solid rgba(255,255,255,.1);
            color: rgba(247,248,255,.58);
            font-family: "Inter", "Segoe UI Variable", "Segoe UI", ui-sans-serif, system-ui, sans-serif;
            font-size: 12px;
        }
        .frame-bar i {
            width: 9px;
            height: 9px;
            border-radius: 50%;
            background: rgba(255,255,255,.3);
        }
        .frame-bar span:last-child { margin-left: auto; color: rgba(110,231,183,.9); }
        .product-image-wrap {
            position: relative;
            min-height: 360px;
            background:
                radial-gradient(circle at 76% 8%, rgba(59,130,246,.24), transparent 24rem),
                #07080c;
        }
        .product-image-wrap img {
            width: 100%;
            height: auto;
            filter: saturate(1.08) contrast(1.08);
        }
        .imported-product .product-image-wrap {
            min-height: 0;
            overflow: visible;
            background: transparent;
        }
        .imported-product .product-image-wrap img {
            filter: none;
        }
        .product-caption {
            position: absolute;
            left: 28px;
            bottom: 28px;
            display: grid;
            gap: 7px;
            max-width: 310px;
            padding: 18px;
            border: 1px solid rgba(255,255,255,.12);
            border-radius: 18px;
            background: rgba(3,4,7,.7);
            backdrop-filter: blur(18px);
            box-shadow: 0 20px 60px rgba(0,0,0,.36);
        }
        .product-caption strong { font-size: 16px; }
        .product-caption small { color: var(--muted); line-height: 1.45; }

        .section-head {
            display: grid;
            grid-template-columns: minmax(0, .7fr) minmax(320px, .3fr);
            gap: clamp(28px, 5vw, 72px);
            align-items: end;
            margin-bottom: clamp(34px, 5vw, 70px);
        }
        .section-head h2 {
            margin: 18px 0 0;
            font-size: clamp(38px, 6.4vw, 92px);
            line-height: .92;
            letter-spacing: 0;
            text-wrap: balance;
        }
        .section-head p {
            margin: 0;
            color: var(--muted);
            font-size: clamp(16px, 1.4vw, 20px);
            line-height: 1.55;
        }

        .bento {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            gap: 16px;
        }
        .platform-section {
            --platform-intro-bottom: clamp(16px, 2.8vh, 28px);
            --platform-card-height: 440px;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            width: min(var(--section-content-width), calc(100% - 40px));
            height: auto;
            min-height: 0;
        }
        .platform-intro {
            display: grid;
            gap: clamp(10px, 1.8vh, 16px);
            margin-bottom: var(--platform-intro-bottom);
        }
        .platform-intro h2 {
            margin: 0;
            max-width: 1080px;
            color: #080a10;
            font-size: clamp(44px, 5.8vw, 78px);
            font-weight: 720;
            line-height: .94;
            letter-spacing: 0;
            text-wrap: balance;
        }
        .platform-intro p {
            max-width: 670px;
            margin: 0;
            color: rgba(8,10,16,.73);
            font-size: clamp(16px, 1.45vw, 20px);
            line-height: 1.35;
        }
        .platform-showcase {
            position: relative;
            z-index: 1;
            display: grid;
            grid-template-columns: repeat(14, minmax(0, 1fr));
            grid-template-rows: repeat(2, minmax(0, var(--platform-card-height)));
            gap: 14px;
        }
        .feature-tile {
            position: relative;
            display: flex;
            grid-column: span 5;
            min-height: 0;
            height: var(--platform-card-height);
            align-items: flex-end;
            overflow: hidden;
            padding: clamp(22px, 2.1vw, 30px);
            border: 0;
            border-radius: 12px;
            background:
                linear-gradient(145deg, rgba(255,255,255,.18), transparent 42%),
                linear-gradient(160deg, #7b818a 0%, #5d636c 50%, #444a53 100%);
            color: #fff;
            box-shadow: 0 20px 42px rgba(24,31,43,.1);
            transition: transform .28s var(--ease), box-shadow .28s var(--ease);
        }
        .feature-tile::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, transparent 32%, rgba(7,10,15,.58) 100%);
            pointer-events: none;
        }
        .feature-tile:hover {
            transform: translateY(-4px);
            box-shadow: 0 28px 52px rgba(24,31,43,.18);
        }
        .feature-tile > div {
            position: relative;
            z-index: 1;
            max-width: 500px;
        }
        .feature-tile h3 {
            margin: 0 0 6px;
            font-size: clamp(20px, 1.65vw, 25px);
            font-weight: 720;
            line-height: 1.08;
            letter-spacing: 0;
        }
        .feature-tile p {
            margin: 0;
            color: rgba(255,255,255,.86);
            font-size: 16px;
            line-height: 1.35;
        }
        .feature-tile.is-wide {
            grid-column: span 9;
            width: 800px;
            min-width: 800px;
            max-width: 800px;
            height: 440px;
            min-height: 440px;
            max-height: 440px;
        }
        .command-tile {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            width: 440px;
            min-width: 440px;
            max-width: 440px;
            height: 440px;
            min-height: 440px;
            max-height: 440px;
            align-items: stretch;
            align-self: start;
            justify-self: start;
            padding: 0;
            overflow: hidden;
            border-radius: 1em;
            background: #0b0d12;
        }
        .command-tile::after { display: none; }
        .command-static-image {
            display: block;
            position: absolute;
            top: 0;
            left: 50%;
            width: auto;
            max-width: none;
            height: auto;
            max-height: none;
            transform: translateX(-50%);
        }
        .feature-tile > .command-static-copy {
            position: absolute;
            inset: auto 0 0;
            z-index: 1;
            width: 100%;
            max-width: none;
            box-sizing: border-box;
            overflow: hidden;
            padding: 82px 22px 24px;
            background: linear-gradient(180deg, rgba(5,7,12,0) 0%, rgba(5,7,12,.68) 46%, rgba(5,7,12,.96) 100%);
        }
        .command-static-copy h4 {
            margin: 0;
            color: #fff;
            font-size: 18px;
            font-weight: 720;
            line-height: 1.28;
            letter-spacing: -.01em;
        }
        .command-static-copy h4 span {
            color: rgba(255,255,255,.68);
            font-size: 16px;
            font-weight: 500;
            letter-spacing: 0;
        }
        .infusion-tile {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: stretch;
            padding: 0;
            border-radius: 1em;
            background: #0b0d12;
        }
        .infusion-tile::after { display: none; }
        .infusion-static-image {
            display: block;
            position: absolute;
            top: 0;
            left: 50%;
            width: auto;
            max-width: none;
            height: auto;
            max-height: none;
            transform: translateX(-50%);
        }
        .card {
            position: relative;
            overflow: hidden;
            min-height: 280px;
            padding: 28px;
            border: 1px solid rgba(255,255,255,.105);
            border-radius: var(--radius);
            background:
                linear-gradient(180deg, rgba(255,255,255,.07), rgba(255,255,255,.025)),
                rgba(255,255,255,.035);
            box-shadow: inset 0 1px 0 rgba(255,255,255,.08), 0 22px 80px rgba(0,0,0,.28);
            transition: transform .28s var(--ease), border-color .28s var(--ease), background .28s var(--ease);
        }
        .card:hover {
            transform: translateY(-4px);
            border-color: rgba(255,255,255,.22);
            background:
                linear-gradient(180deg, rgba(255,255,255,.09), rgba(255,255,255,.035)),
                rgba(255,255,255,.045);
        }
        .card::before {
            content: "";
            position: absolute;
            right: -80px;
            top: -100px;
            width: 260px;
            height: 260px;
            border-radius: 50%;
            background: rgba(139,92,246,.15);
            filter: blur(70px);
            transition: transform .35s var(--ease), opacity .35s var(--ease);
            opacity: .72;
        }
        .card:hover::before { transform: scale(1.18); opacity: 1; }
        .card h3 {
            position: relative;
            margin: 0 0 12px;
            font-size: clamp(24px, 2.2vw, 36px);
            line-height: 1;
            letter-spacing: 0;
        }
        .card p {
            position: relative;
            max-width: 620px;
            margin: 0;
            color: rgba(247,248,255,.68);
            line-height: 1.58;
        }
        .wide { grid-column: span 7; }
        .tall { grid-column: span 5; min-height: 486px; }
        .half { grid-column: span 6; }
        .third { grid-column: span 4; }
        .quiet { background: linear-gradient(180deg, rgba(255,255,255,.04), rgba(255,255,255,.018)); }
        .statement {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            background:
                radial-gradient(circle at 84% 18%, rgba(34,211,238,.22), transparent 18rem),
                radial-gradient(circle at 18% 88%, rgba(244,162,97,.18), transparent 20rem),
                #e8eef9;
            color: #07080c;
        }
        .statement p { color: rgba(7,8,12,.66); }
        .statement .mini-label { color: rgba(7,8,12,.56); }
        .mini-label {
            position: relative;
            margin-bottom: 18px;
            color: var(--dim);
            font-family: "Inter", "Segoe UI Variable", "Segoe UI", ui-sans-serif, system-ui, sans-serif;
            font-size: 12px;
            text-transform: uppercase;
        }
        .mini-ui {
            position: relative;
            display: grid;
            gap: 11px;
            margin-top: 34px;
        }
        .mini-row {
            display: grid;
            grid-template-columns: 38px 1fr auto;
            align-items: center;
            gap: 13px;
            min-height: 54px;
            padding: 10px 12px;
            border: 1px solid rgba(255,255,255,.09);
            border-radius: 15px;
            background: rgba(0,0,0,.22);
            color: rgba(247,248,255,.72);
        }
        .mini-icon {
            display: grid;
            width: 36px;
            height: 36px;
            place-items: center;
            border-radius: 12px;
            background: rgba(139,92,246,.16);
            color: #dcd5ff;
            font-weight: 900;
        }
        .mini-row strong { display: block; color: #fff; font-size: 14px; }
        .mini-row small { color: var(--dim); }
        .status {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            min-height: 27px;
            padding: 0 10px;
            border-radius: 999px;
            background: rgba(110,231,183,.11);
            color: rgba(177,255,222,.95);
            font-family: "Inter", "Segoe UI Variable", "Segoe UI", ui-sans-serif, system-ui, sans-serif;
            font-size: 11px;
        }
        .code-card {
            position: relative;
            margin-top: 34px;
            overflow: hidden;
            border: 1px solid rgba(255,255,255,.12);
            border-radius: 18px;
            background: rgba(0,0,0,.38);
        }
        .code-card pre {
            margin: 0;
            padding: 20px;
            overflow: auto;
            color: rgba(247,248,255,.74);
            font-family: "Inter", "Segoe UI Variable", "Segoe UI", ui-sans-serif, system-ui, sans-serif;
            font-size: 13px;
            line-height: 1.65;
        }
        .code-card b { color: #fff; font-weight: 700; }
        .code-card em { color: var(--cyan); font-style: normal; }

        .core-visual {
            position: relative;
            min-height: 420px;
            margin-top: 24px;
        }
        .core-visual img {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 18px;
            filter: contrast(1.08) saturate(1.1);
        }
        .core-visual::after {
            content: "";
            position: absolute;
            inset: 0;
            border-radius: 18px;
            background: linear-gradient(180deg, transparent 0%, rgba(6,7,10,.64) 100%);
        }

        .architecture {
            display: grid;
            grid-template-columns: minmax(0, 1fr);
            grid-template-rows: auto auto auto;
            align-content: start;
            gap: clamp(20px, 3vh, 30px);
            min-height: 100%;
        }
        .shell.architecture-section {
            width: min(1600px, calc(100% - 40px));
            height: auto;
            min-height: 100vh;
            background: #020304;
            box-shadow: 0 0 0 100vmax #020304;
            clip-path: inset(0 -100vmax);
        }
        .architecture-section::before {
            content: "";
            position: absolute;
            inset: 0 calc(50% - 50vw) -260px;
            z-index: 0;
            background:
                radial-gradient(ellipse 40% 14% at 55% 54%, rgba(70, 210, 220, .045), transparent 74%),
                linear-gradient(180deg, #020304 0%, #020304 100%);
            pointer-events: none;
        }
        .architecture-section::after {
            content: "";
            position: absolute;
            inset: auto calc(50% - 50vw) 0;
            z-index: 0;
            height: min(30vw, 360px);
            background: linear-gradient(180deg, rgba(2,3,4,0) 0%, #020304 34%, #020304 100%);
            pointer-events: none;
        }
        .architecture .copy-block {
            max-width: none;
        }
        .architecture .copy-block h2 {
            max-width: 13.5em;
            margin-top: 0;
            font-size: clamp(28px, 3.8vw, 58px);
            line-height: 1;
        }
        .architecture .copy-block p {
            max-width: 34em;
            font-size: clamp(15px, 1.2vw, 17px);
            line-height: 1.55;
        }
        .architecture-conveyor {
            position: relative;
            overflow: hidden;
            width: min(100vw, 1560px);
            margin: 0 auto;
        }
        .architecture-conveyor::after {
            content: "";
            position: absolute;
            inset: 0;
            background:
                linear-gradient(90deg, #020304 0%, rgba(2,3,4,0) 14%, rgba(2,3,4,0) 86%, #020304 100%),
                linear-gradient(180deg, #020304 0%, rgba(2,3,4,0) 16%, rgba(2,3,4,.62) 76%, #020304 100%);
            pointer-events: none;
        }
        .architecture-conveyor img {
            display: block;
            width: 100%;
            height: min(32vh, 360px);
            object-fit: cover;
            object-position: center;
            filter: contrast(1.03) saturate(1.04);
            -webkit-mask-image: linear-gradient(180deg, #000 0%, #000 58%, rgba(0,0,0,.72) 74%, transparent 100%);
            mask-image: linear-gradient(180deg, #000 0%, #000 58%, rgba(0,0,0,.72) 74%, transparent 100%);
        }
        .steps {
            position: relative;
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: clamp(24px, 4.4vw, 78px);
            width: min(var(--section-content-width), 100%);
            margin-inline: auto;
            padding: clamp(4px, 1vh, 10px) var(--section-title-inset) 0;
            background: #020304;
        }
        .step {
            position: relative;
            display: block;
            min-height: 108px;
            padding: 0;
            border: 0;
            border-radius: 0;
            background: transparent;
        }
        .step::before {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            top: 16px;
            height: 1px;
            background: linear-gradient(90deg, rgba(188,124,255,.56), rgba(34,211,238,.18), transparent);
            opacity: .46;
        }
        .step:last-child::before { display: none; }
        .step-number {
            position: relative;
            display: grid;
            width: 28px;
            height: 28px;
            margin-bottom: 12px;
            place-items: center;
            color: #d8b4fe;
            font-size: 0;
        }
        .step-number::before,
        .step-number::after {
            content: "";
            position: absolute;
            border: 1px solid currentColor;
            opacity: .9;
        }
        .step-number::before {
            width: 14px;
            height: 14px;
            border-radius: 5px;
            transform: rotate(45deg);
            box-shadow: 0 0 18px rgba(216,180,254,.28);
        }
        .step-number::after {
            width: 4px;
            height: 4px;
            border-radius: 999px;
            background: currentColor;
            box-shadow: 0 0 16px currentColor;
        }
        .step h3 {
            margin: 0 0 8px;
            color: #fff;
            font-size: clamp(15px, 1.2vw, 17px);
            line-height: 1.15;
            letter-spacing: 0;
        }
        .step p {
            max-width: 24em;
            margin: 0;
            color: rgba(238,241,248,.72);
            font-size: clamp(14px, 1vw, 16px);
            line-height: 1.42;
        }
        .diagram {
            position: relative;
            min-height: 560px;
            border: 1px solid rgba(255,255,255,.1);
            border-radius: 28px;
            overflow: hidden;
            background:
                radial-gradient(circle at 50% 46%, rgba(139,92,246,.18), transparent 18rem),
                radial-gradient(circle at 68% 60%, rgba(34,211,238,.12), transparent 20rem),
                rgba(255,255,255,.035);
        }
        .diagram-core {
            position: absolute;
            left: 50%;
            top: 50%;
            display: grid;
            width: 178px;
            height: 178px;
            place-items: center;
            transform: translate(-50%, -50%);
            border: 1px solid rgba(255,255,255,.22);
            border-radius: 50%;
            background:
                radial-gradient(circle, rgba(255,255,255,.96) 0 6%, rgba(139,92,246,.32) 18%, rgba(6,8,12,.96) 64%),
                rgba(255,255,255,.08);
            box-shadow: 0 0 90px rgba(139,92,246,.38), inset 0 0 50px rgba(59,130,246,.18);
            text-align: center;
            animation: breathe 8s ease-in-out infinite;
        }
        .diagram-core strong { display: block; font-size: 22px; }
        .diagram-core small { display: block; color: var(--muted); }
        .orbit {
            position: absolute;
            left: 50%;
            top: 50%;
            width: 430px;
            height: 430px;
            transform: translate(-50%, -50%);
            border: 1px solid rgba(255,255,255,.09);
            border-radius: 50%;
        }
        .orbit.o2 { width: 310px; height: 310px; opacity: .72; }
        .node {
            position: absolute;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            min-height: 42px;
            padding: 0 13px;
            border: 1px solid rgba(255,255,255,.14);
            border-radius: 999px;
            background: rgba(8,10,16,.72);
            box-shadow: 0 16px 40px rgba(0,0,0,.26);
            color: rgba(247,248,255,.78);
            font-size: 13px;
            backdrop-filter: blur(14px);
        }
        .node::before {
            content: "";
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--cyan);
            box-shadow: 0 0 18px rgba(34,211,238,.8);
        }
        .n1 { left: 8%; top: 18%; }
        .n2 { right: 8%; top: 20%; }
        .n3 { left: 5%; bottom: 18%; }
        .n4 { right: 8%; bottom: 18%; }
        .n5 { left: 39%; top: 7%; }
        .n6 { left: 38%; bottom: 7%; }

        .split {
            display: grid;
            grid-template-columns: minmax(0, .48fr) minmax(0, .52fr);
            gap: clamp(26px, 5vw, 74px);
            align-items: center;
        }
        .admin-section {
            color: var(--text);
            background: #000206;
            box-shadow: 0 0 0 100vmax #000206;
            clip-path: inset(0 -100vmax);
        }
        .admin-layout {
            grid-template-columns: minmax(0, .48fr) minmax(0, .52fr);
            gap: clamp(36px, 4vw, 64px);
            min-height: clamp(680px, 60vw, 860px);
            align-items: stretch;
        }
        .admin-copy {
            display: flex;
            max-width: 560px;
            flex-direction: column;
            justify-content: flex-start;
            padding-block: clamp(24px, 4vw, 56px);
        }
        .admin-section .copy-block h2 {
            margin-top: 22px;
            color: #fff;
            font-size: clamp(44px, 4.6vw, 64px);
            line-height: .94;
        }
        .admin-section .copy-block p {
            max-width: 34em;
            color: rgba(238,241,248,.72);
        }
        .admin-section .check-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: clamp(34px, 4vw, 54px) clamp(38px, 5vw, 70px);
            margin-top: clamp(34px, 4vw, 52px);
        }
        .admin-section .check {
            display: block;
            min-height: 0;
            padding: 0;
            border: 0;
            border-radius: 0;
            background: transparent;
        }
        .admin-section .check::before {
            content: none;
            display: none;
        }
        .admin-section .check img {
            display: block;
            width: 56px;
            height: 56px;
            object-fit: contain;
            margin-bottom: 18px;
        }
        .admin-section .check strong {
            display: block;
            max-width: 8.5em;
            color: #fff;
            font-size: clamp(23px, 2vw, 30px);
            font-weight: 500;
            line-height: 1.04;
            letter-spacing: 0;
        }
        .admin-section .check small {
            display: block;
            max-width: 17em;
            margin-top: 11px;
            color: rgba(238,241,248,.56);
            font-size: clamp(14px, 1vw, 16px);
            line-height: 1.45;
            font-weight: 500;
        }
        .admin-visual {
            position: relative;
            min-height: calc(100% + var(--section-pad-block) + var(--section-pad-block));
            margin-block: calc(-1 * var(--section-pad-block));
            overflow: hidden;
            background-color: #000206;
            background-image:
                linear-gradient(90deg, #000206 0%, rgba(0,2,6,.82) 12%, rgba(0,2,6,.08) 42%, rgba(0,2,6,.12) 78%, #000206 100%),
                linear-gradient(180deg, #000206 0%, transparent 12%, transparent 88%, #000206 100%),
                url('assets/images/section-4-operations.png');
            background-position: center, center, center;
            background-repeat: no-repeat;
            background-size: cover, cover, cover;
        }
        .admin-visual::after {
            content: "";
            position: absolute;
            inset: 0;
            pointer-events: none;
            background:
                radial-gradient(circle at 58% 24%, rgba(45,145,255,.08), transparent 28%),
                radial-gradient(circle at 62% 72%, rgba(224,82,183,.07), transparent 30%);
            mix-blend-mode: screen;
        }
        .ecosystem-section {
            color: #080a10;
            background: #ECEAEE;
            box-shadow: 0 0 0 100vmax #ECEAEE;
            clip-path: inset(0 -100vmax);
        }
        .ecosystem-section::before {
            content: "";
            position: absolute;
            inset: 0 calc(50% - 50vw);
            z-index: 0;
            pointer-events: none;
            background:
                linear-gradient(90deg, rgba(54,190,224,.18) 0 1px, transparent 1px 34px),
                linear-gradient(90deg, transparent 0 88%, rgba(54,190,224,.16) 88% calc(88% + 1px), transparent calc(88% + 1px)),
                radial-gradient(circle at 18% 72%, rgba(65,126,255,.12), transparent 24rem),
                radial-gradient(circle at 84% 72%, rgba(241,119,101,.10), transparent 28rem);
            opacity: .72;
        }
        .ecosystem-copy {
            display: grid;
            justify-content: center;
            margin-bottom: clamp(34px, 5vw, 62px);
            text-align: left;
        }
        .ecosystem-copy h2 {
            max-width: 860px;
            margin: 0;
            color: #080a10;
            font-size: clamp(54px, 7vw, 96px);
            line-height: .94;
            letter-spacing: 0;
        }
        .ecosystem-copy p {
            max-width: 680px;
            margin: 18px 0 0;
            color: rgba(8,10,16,.76);
            font-size: clamp(17px, 1.45vw, 21px);
            line-height: 1.35;
        }
        .ecosystem-visual {
            position: relative;
            z-index: 1;
            width: min(100%, 1500px);
            margin-inline: auto;
        }
        .ecosystem-visual img {
            display: block;
            width: 100%;
            height: auto;
            border-radius: 0;
            filter: drop-shadow(0 26px 70px rgba(13,25,45,.12));
        }
        .screen {
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(255,255,255,.14);
            border-radius: 28px;
            background: rgba(255,255,255,.04);
            box-shadow: 0 28px 90px rgba(0,0,0,.38);
        }
        .screen img { width: 100%; filter: saturate(1.08) contrast(1.08); }
        .screen::after {
            content: "";
            position: absolute;
            inset: 0;
            pointer-events: none;
            background:
                linear-gradient(180deg, rgba(255,255,255,.04), transparent 18%),
                radial-gradient(circle at 86% 8%, rgba(34,211,238,.2), transparent 15rem);
        }
        .copy-block h2 {
            margin: 18px 0 18px;
            font-size: clamp(38px, 5.2vw, 78px);
            line-height: .92;
            text-wrap: balance;
        }
        .copy-block p {
            color: var(--muted);
            font-size: 18px;
            line-height: 1.58;
        }
        .check-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 10px;
            margin-top: 26px;
        }
        .check {
            min-height: 48px;
            padding: 13px 14px;
            border: 1px solid rgba(255,255,255,.1);
            border-radius: 15px;
            background: rgba(255,255,255,.04);
            color: rgba(247,248,255,.76);
            font-weight: 650;
        }
        .check::before { content: "+ "; color: var(--green); }

        .final-section {
            position: relative;
            overflow: hidden;
            min-height: clamp(530px, 31vw, 610px);
            background: #080a0b;
            box-shadow: 0 0 0 100vmax #080a0b;
            clip-path: inset(0 -100vmax);
        }
        .final-section::after {
            content: "";
            position: absolute;
            inset: 0;
            z-index: 1;
            pointer-events: none;
            background:
                linear-gradient(90deg, rgba(8,10,11,.08) 0%, transparent 35%, rgba(8,10,11,.12) 70%, rgba(8,10,11,.44) 100%),
                linear-gradient(180deg, rgba(8,10,11,.3) 0%, transparent 20%, transparent 78%, rgba(8,10,11,.52) 100%);
        }
        .final-wave {
            position: absolute;
            inset: 0;
            z-index: 0;
            width: 100%;
            height: 100%;
            max-width: none;
            object-fit: cover;
            object-position: center;
        }
        .final-inner {
            position: relative;
            z-index: 2;
            display: grid;
            grid-template-columns: minmax(0, 1.05fr) minmax(430px, .95fr);
            min-height: inherit;
            align-items: center;
            gap: clamp(24px, 3vw, 54px);
        }
        .final-art {
            position: relative;
            width: clamp(440px, 31vw, 530px);
            aspect-ratio: 1;
            justify-self: start;
            filter: drop-shadow(0 28px 56px rgba(0,0,0,.46));
        }
        .final-sonar {
            position: absolute;
            inset: 1.625%;
            width: 96.75%;
            max-width: none;
            clip-path: circle(40.5% at 50% 50%);
            animation: final-sonar-float 8s ease-in-out infinite;
        }
        .final-copy {
            max-width: 620px;
            padding-right: var(--section-title-inset);
            transform: translateY(-18px);
        }
        .final-copy h2 {
            max-width: 620px;
            margin: 0 0 16px;
            font-size: clamp(52px, 4.6vw, 76px);
            font-weight: 650;
            line-height: .88;
            letter-spacing: 0;
            text-wrap: balance;
        }
        .final-copy h2 span { display: block; }
        .final-copy p {
            max-width: 510px;
            margin: 0 0 28px;
            color: var(--muted);
            font-size: clamp(16px, 1.25vw, 19px);
            line-height: 1.45;
        }
        .final-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
        }
        @keyframes final-sonar-float {
            0%, 100% { transform: translate3d(0, 0, 0) scale(1); }
            50% { transform: translate3d(0, -8px, 0) scale(1.012); }
        }
        .site-footer {
            position: relative;
            background: #080a0b;
            box-shadow: 0 0 0 100vmax #080a0b;
            clip-path: inset(0 -100vmax);
            border-top: 1px solid rgba(255,255,255,.055);
        }
        .footer {
            display: grid;
            grid-template-columns: minmax(max-content, 1.2fr) auto auto minmax(max-content, 1.15fr);
            align-items: center;
            gap: clamp(22px, 3vw, 52px);
            padding: 26px 0 30px;
            color: var(--dim);
            font-size: 13px;
            line-height: 1.35;
        }
        .footer-copy { white-space: nowrap; }
        .footer-legal,
        .footer-social,
        .footer-signature {
            display: flex;
            align-items: center;
        }
        .footer-legal {
            gap: 26px;
            color: rgba(247,248,255,.72);
            font-weight: 600;
            white-space: nowrap;
        }
        .footer-social { gap: 14px; }
        .footer-social a {
            display: inline-grid;
            width: 22px;
            height: 28px;
            place-items: center;
            color: rgba(247,248,255,.58);
            transition: color .18s var(--ease), transform .18s var(--ease);
        }
        .footer-social svg {
            width: 17px;
            height: 17px;
            stroke-width: 2;
        }
        .footer-signature {
            justify-self: end;
            gap: 10px;
            white-space: nowrap;
        }
        .footer-signature svg {
            width: 18px;
            height: 18px;
            color: #ff7a2f;
            fill: rgba(255,122,47,.28);
            filter: drop-shadow(0 0 8px rgba(255,103,31,.7));
        }
        .footer a:hover {
            color: #fff;
        }
        .footer-social a:hover {
            transform: translateY(-2px);
        }

        .reveal {
            opacity: 0;
            transform: translateY(24px);
            transition: opacity .75s var(--ease), transform .75s var(--ease);
        }
        .reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }
        @keyframes breathe {
            0%, 100% { transform: translate(-50%, -50%) scale(1); }
            50% { transform: translate(-50%, -50%) scale(1.035); }
        }

        @media (max-width: 1180px) {
            .footer {
                grid-template-columns: 1fr 1fr;
            }
            .footer-social,
            .footer-signature {
                justify-self: end;
            }
        }

        @media (max-width: 980px) {
            :root { --section-pad-block: clamp(76px, 9vw, 88px); }
            .nav { border-radius: 28px; align-items: flex-start; flex-wrap: wrap; }
            .mobile-toggle {
                display: inline-flex;
                width: 44px;
                height: 44px;
                align-items: center;
                justify-content: center;
                border: 1px solid var(--line);
                border-radius: 50%;
                background: rgba(255,255,255,.06);
                color: #fff;
                font-size: 0;
            }
            .mobile-toggle::before { content: "Menu"; font-size: 11px; font-weight: 800; }
            .nav-links {
                display: none;
                order: 3;
                width: 100%;
                flex-direction: column;
                align-items: flex-start;
                padding: 10px 8px 8px 42px;
            }
            .nav.mobile-open .nav-links { display: flex; }
            .nav-actions .button:not(.primary) { display: none; }
            .product-stage { top: 561px; margin: 0; }
            .section-head, .split {
                grid-template-columns: 1fr;
            }
            .architecture { grid-template-columns: minmax(0, 1fr); }
            .shell.architecture-section {
                height: auto;
                min-height: 100vh;
            }
            .architecture {
                grid-template-rows: auto;
                gap: 28px;
            }
            .architecture-conveyor img {
                height: auto;
                object-fit: contain;
            }
            .steps {
                grid-template-columns: 1fr;
                gap: 28px;
                width: 100%;
                margin-inline: 0;
                padding-top: 0;
            }
            .step {
                min-height: 0;
            }
            .step::before {
                left: 16px;
                right: auto;
                top: 34px;
                width: 1px;
                height: calc(100% - 8px);
                background: linear-gradient(180deg, rgba(188,124,255,.5), rgba(34,211,238,.18), transparent);
            }
            .step:last-child::before {
                display: none;
            }
            .wide, .tall, .half, .third { grid-column: span 12; }
            .admin-layout {
                gap: 48px;
                min-height: 0;
            }
            .admin-copy {
                max-width: 680px;
                padding-block: 0;
            }
            .admin-visual {
                min-height: clamp(520px, 92vw, 760px);
                margin-block: 0;
                background-position: center, center, center;
                background-size: cover, cover, auto 112%;
            }
            .platform-section {
                height: auto;
                min-height: 0;
                justify-content: flex-start;
            }
            .platform-showcase { grid-template-columns: 1fr; }
            .platform-showcase { grid-template-rows: none; }
            .feature-tile,
            .feature-tile.is-wide {
                grid-column: span 1;
                width: min(100%, 440px);
                min-width: 0;
                max-width: none;
                height: auto;
                min-height: 0;
                max-height: none;
                aspect-ratio: 1;
            }
            .feature-tile.is-wide {
                width: min(100%, 800px);
                min-width: 0;
                max-width: none;
                aspect-ratio: 20 / 11;
            }
            .command-tile {
                width: min(100%, 440px);
                min-width: 0;
                max-width: none;
                height: auto;
                min-height: 0;
                max-height: none;
                aspect-ratio: 1;
            }
            .command-static-image,
            .infusion-static-image {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
            .final-section {
                min-height: 760px;
            }
            .final-inner {
                grid-template-columns: 1fr;
                align-content: center;
                justify-items: center;
                gap: 0;
                padding-block: 26px 54px;
            }
            .final-art {
                width: min(60vw, 480px);
                margin: -24px auto -54px;
                justify-self: center;
            }
            .final-copy {
                position: relative;
                z-index: 2;
                max-width: 620px;
                padding-inline: 20px;
                text-align: center;
                transform: none;
            }
            .final-copy h2 {
                max-width: 9em;
                margin-inline: auto;
            }
            .final-copy p {
                margin-inline: auto;
            }
            .final-actions {
                justify-content: center;
            }
        }

        @media (max-width: 640px) {
            :root {
                --section-title-inset: 6px;
                --section-pad-block: 68px;
            }
            .hero-scene {
                min-height: 565px;
            }
            .shell { width: min(100% - 28px, 1440px); }
            .platform-section { width: min(100% - 28px, 1254px); }
            .shell.architecture-section { width: min(100% - 28px, 1600px); }
            .hero-title {
                max-width: 16rem;
                font-size: 32px;
            }
            .hero-title span { display: block; }
            .nav {
                width: min(100% - 28px, var(--section-content-width));
                padding-inline: var(--section-title-inset);
            }
            .nav-actions { margin-left: auto; }
            .nav-actions .button { display: none; }
            .mobile-toggle {
                display: inline-flex;
                position: absolute;
                right: 10px;
                top: 10px;
                z-index: 3;
                border-color: rgba(255,255,255,.8);
                background: rgba(247,248,255,.92);
                color: #07080c;
            }
            .product-stage { top: 561px; width: calc(100% - 20px); margin: 0; }
            .product-frame { border-radius: 18px; transform: none; }
            .product-frame.imported-product { transform: none; }
            .product-caption { position: static; max-width: none; border-radius: 0; border-width: 1px 0 0; }
            .product-image-wrap { min-height: auto; }
            .card { min-height: 240px; padding: 22px; border-radius: 18px; }
            .bento { gap: 12px; }
            .platform-intro { gap: 14px; margin-bottom: 30px; }
            .platform-intro h2 { font-size: clamp(38px, 12vw, 52px); }
            .platform-intro p,
            .feature-tile p { font-size: 15px; }
            .ecosystem-copy {
                justify-content: start;
                margin-bottom: 28px;
            }
            .ecosystem-copy h2 {
                font-size: clamp(40px, 13vw, 56px);
            }
            .ecosystem-copy p {
                font-size: 16px;
            }
            .platform-showcase { gap: 10px; }
            .feature-tile {
                padding: 22px;
                border-width: 0;
            }
            .command-tile,
            .infusion-tile { padding: 0; }
            .diagram { min-height: 460px; }
            .orbit { width: 310px; height: 310px; }
            .orbit.o2 { width: 220px; height: 220px; }
            .node { font-size: 11px; }
            .check-grid { grid-template-columns: 1fr; }
            .final-section { min-height: 710px; }
            .final-wave { object-position: 42% center; }
            .final-inner { padding-block: 18px 46px; }
            .final-art {
                width: min(84vw, 360px);
                margin: 0 auto -24px;
            }
            .final-copy {
                width: 100%;
                padding-inline: 6px;
            }
            .final-copy h2 {
                font-size: clamp(42px, 12.2vw, 48px);
                line-height: .92;
            }
            .final-copy p {
                font-size: 16px;
            }
            .final-actions .button {
                flex: 1 1 180px;
            }
            .footer {
                grid-template-columns: 1fr;
                justify-items: start;
                gap: 18px;
                padding-block: 26px 34px;
            }
            .footer-copy { white-space: normal; }
            .footer-legal { gap: 18px; }
            .footer-social,
            .footer-signature {
                justify-self: start;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            html { scroll-behavior: auto; }
            *, *::before, *::after {
                animation-duration: .001ms !important;
                animation-iteration-count: 1 !important;
                scroll-behavior: auto !important;
                transition-duration: .001ms !important;
            }
        }
    </style>
</head>
<body>
<div class="page min-h-screen overflow-hidden">
    <div class="hero-scene relative z-[1] isolate">
        <div class="hero-media absolute inset-y-0 left-1/2 z-[-2] -translate-x-1/2 overflow-hidden" aria-hidden="true">
            <img class="h-full w-full object-cover object-[62%_50%] brightness-[1.16] contrast-[1.04] saturate-[1.06] max-[980px]:object-[66%_50%] max-sm:object-[63%_50%]" src="<?= e($asset) ?>images/x-up-bg-2.png" alt="" fetchpriority="high">
        </div>
        <nav class="nav" id="site-nav" aria-label="Primary navigation">
            <a class="brand inline-flex items-center gap-2.5 whitespace-nowrap text-[17px] font-[760] tracking-normal" href="#top" aria-label="PHPFusion home">
                <span class="brand-mark" aria-hidden="true"></span>
                PHPFusion
            </a>
            <div class="nav-links flex items-center justify-center gap-[clamp(14px,2.2vw,34px)] text-sm font-[650] text-[rgba(247,248,255,.72)]">
                <a class="py-2.5 transition-colors duration-[180ms] hover:text-white" href="#platform">Platform</a>
                <a class="py-2.5 transition-colors duration-[180ms] hover:text-white" href="#architecture">Architecture</a>
                <a class="py-2.5 transition-colors duration-[180ms] hover:text-white" href="#admin">Admin</a>
                <a class="py-2.5 transition-colors duration-[180ms] hover:text-white" href="#ecosystem">Ecosystem</a>
            </div>
            <div class="nav-actions flex items-center gap-2.5">
                <a class="button" href="https://github.com/PHPFusion/PHPFusion" target="_blank" rel="noopener noreferrer">GitHub</a>
                <a class="button primary" href="#platform">Explore</a>
                <button class="mobile-toggle" type="button" aria-label="Toggle navigation" aria-expanded="false"></button>
            </div>
        </nav>
        <header class="hero relative min-h-[509px] isolate pt-14 max-sm:pt-8" id="top">
        <div class="shell hero-content relative z-[99] grid min-h-0 content-start pt-4 pb-[74px] max-[980px]:pb-[62px] max-sm:pt-2 max-sm:pb-[52px]">
            <div class="reveal content-frame">
                <span class="eyebrow"><span class="pulse"></span> Open-source CMS + PHP application platform</span>
                <h1 class="hero-title relative z-30 max-w-[616px] bg-gradient-to-br from-white from-30% via-[#d5d8f6] via-80% to-[#fdf7fe] bg-clip-text font-title text-84 font-semibold leading-[0.9] tracking-tight text-transparent lg:max-w-[528px] lg:text-72 md:max-w-[441px] md:text-56 sm:max-w-64 sm:text-32"><span>PHPFusion</span> <span>10</span></h1>
                <p class="relative z-30 mt-5 mb-7 max-w-md text-18 leading-snug tracking-tight text-grey-90 lg:mt-4 md:mt-3.5 md:text-16 sm:mt-3 sm:max-w-[248px] sm:text-15 lg:mt-5 lg:max-w-md lg:text-18">A self-hosted PHP core where content, administration, AI tools, themes, secure forms, and installable infusions work as one extensible system.</p>
                <div class="hero-actions flex flex-wrap gap-3">
                    <a class="button primary platform-cta icon" href="#platform">Explore the platform</a>
                    <a class="button" href="#architecture">View architecture</a>
                </div>
                <div class="hero-pills mt-[26px] flex flex-wrap gap-2.5" aria-label="PHPFusion platform highlights">
                    <span class="pill">Self-hosted PHP</span>
                    <span class="pill">Infusion modules</span>
                    <span class="pill">Dynamics UI SDK</span>
                    <span class="pill">Defender security</span>
                    <span class="pill">Tiptap editor</span>
                </div>
            </div>
        </div>
        </header>

        <section class="product-stage" aria-label="PHPFusion product preview">
            <div class="product-frame imported-product">
                <div class="frame-bar"><i></i><i></i><i></i><strong>phpfusion://admin/workspace</strong><span>PHP core online</span></div>
                <div class="product-image-wrap">
                    <img src="<?= e($asset) ?>images/phpfusion-browser-window-transparent-cropped.png" alt="PHPFusion content management browser window with issue-style columns and notifications">
                    <div class="product-caption">
                        <strong>Immediate product proof</strong>
                        <small>Administration, content workflows, module activation, code services, and preview surfaces presented as one operating layer.</small>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <main>
        <section class="section shell platform-section light-section relative isolate" id="platform">
            <div class="platform-intro reveal content-frame relative z-[1]">
                <h2>A complete platform</h2>
                <p>PHPFusion brings content, administration, community features, extensions, and application services into one self-hosted platform.</p>
            </div>

            <div class="platform-showcase">
                <article class="feature-tile command-tile reveal">
                    <img class="command-static-image" src="<?= e($asset) ?>images/card-1-re.png" alt="PHPFusion Core">
                    <div class="command-static-copy">
                        <h4>Keyboard shortcuts. <span>Work efficiently with instant access to common actions.</span></h4>
                    </div>
                </article>

                <article class="feature-tile is-wide infusion-tile reveal">
                    <img class="infusion-static-image" src="<?= e($asset) ?>images/card-2-re.png" alt="PHPFusion infusion management interface showing blog and forum modules">
                    <div class="command-static-copy">
                        <h4>Infusion modules. <span>Install complete capabilities that extend PHPFusion without rebuilding the platform.</span></h4>
                    </div>
                </article>

                <article class="feature-tile is-wide infusion-tile reveal">
                    <img class="infusion-static-image" src="<?= e($asset) ?>images/card-3-re.png" alt="PHPFusion AI-assisted planning interface with scheduled task cards">
                    <div class="command-static-copy">
                        <h4>Modern interfaces. <span>Pair PHP with editors, forms, APIs, and internal AJAX for practical application workflows.</span></h4>
                    </div>
                </article>

                <article class="feature-tile infusion-tile reveal">
                    <img class="infusion-static-image" src="<?= e($asset) ?>images/card-4-re.png" alt="PHPFusion community and API layer interface card">
                    <div class="command-static-copy">
                        <h4>Full ownership. <span>Run your source, data, deployment, and administration stack on your own terms.</span></h4>
                    </div>
                </article>
            </div>
        </section>
        <section class="section shell architecture-section relative isolate" id="architecture">
            <div class="architecture relative z-[1]">
                <div class="copy-block reveal content-frame">
                    <h2>Traditional PHP and modern APIs share the same foundation.</h2>
                    <p>Build each feature through the pattern it needs: server-rendered PHP, external REST routes with middleware, or internal AJAX endpoints backed by reusable services.</p>
                </div>
                <div class="architecture-conveyor reveal" aria-label="PHPFusion modular workflow visual">
                    <img src="<?= e($asset) ?>images/conveyor-2.png" alt="Dark illuminated conveyor path representing modular PHPFusion workflows">
                </div>
                <div class="steps relative z-[1]">
                    <article class="step reveal">
                        <span class="step-number">01</span>
                        <div><h3>Render with PHP</h3><p>Standard pages can call services directly after request sanitization and reuse PHPFusion templates, locale, permissions, and theme services.</p></div>
                    </article>
                    <article class="step reveal">
                        <span class="step-number">02</span>
                        <div><h3>Expose protected routes</h3><p>REST requests move through router, middleware, controllers, and service classes so persistent changes stay in one responsible layer.</p></div>
                    </article>
                    <article class="step reveal">
                        <span class="step-number">03</span>
                        <div><h3>Endpoints</h3><p>Internal AJAX endpoints update settings, previews, tables, and AI responses without rebuilding the whole page.</p></div>
                    </article>
                </div>
            </div>
        </section>

        <section class="section shell admin-section relative isolate" id="admin">
            <div class="split content-frame admin-layout relative z-[1]">
                <div class="copy-block admin-copy reveal">
                    <span class="eyebrow"><span class="pulse"></span> Administration center</span>
                    <h2>An operations console, not just a content editor.</h2>
                    <p>Administrators manage members, permissions, settings, themes, infusions, file assets, logs, backups, updates, content surfaces, and security controls from one broad platform console.</p>
                    <div class="check-grid">
                        <article class="check">
                            <img src="<?= e($asset) ?>images/icon_1.avif" alt="" loading="lazy">
                            <strong>Members and access rights</strong>
                            <small>Manage user accounts, groups, permissions, and protected areas from one administration surface.</small>
                        </article>
                        <article class="check">
                            <img src="<?= e($asset) ?>images/icon_2.avif" alt="" loading="lazy">
                            <strong>Themes, presets, widgets</strong>
                            <small>Configure visual systems, reusable panels, theme behavior, and interface presets without leaving the console.</small>
                        </article>
                        <article class="check">
                            <img src="<?= e($asset) ?>images/icon_3.avif" alt="" loading="lazy">
                            <strong>Files, logs, backups</strong>
                            <small>Keep assets, system logs, backups, and maintenance tasks close to the people operating the site.</small>
                        </article>
                        <article class="check">
                            <img src="<?= e($asset) ?>images/icon_4.avif" alt="" loading="lazy">
                            <strong>Infusion install and upgrade</strong>
                            <small>Install, activate, upgrade, and manage modular PHPFusion capabilities through a controlled workflow.</small>
                        </article>
                    </div>
                </div>
                <div class="admin-visual reveal" role="img" aria-label="Glowing blue, orange, magenta, and green glass interface forms"></div>
            </div>
        </section>

        <section class="section shell ecosystem-section relative isolate" id="ecosystem">
            <div class="ecosystem-copy reveal content-frame relative z-[1]">
                <h2>Modern publishing, community, and support surfaces.</h2>
                <p>PHPFusion brings news, blogs, articles, forums, web links, and help content into one connected website foundation.</p>
            </div>
            <div class="ecosystem-visual reveal" aria-label="PHPFusion content ecosystem interface preview">
                <img src="<?= e($asset) ?>images/hero-5.png" alt="PHPFusion content ecosystem with news, blog, articles, community forum, web links, and FAQs">
            </div>
        </section>

        <section class="final-section" id="community">
            <img class="final-wave" src="<?= e($asset) ?>images/bgfooter.png" alt="" aria-hidden="true">
            <div class="final-inner content-frame reveal">
                <div class="final-art" aria-hidden="true">
                    <img class="final-sonar" src="<?= e($asset) ?>images/pfsonar.png" alt="">
                </div>
                <div class="final-copy">
                    <h2><span>Build the next</span><span>PHP platform.</span></h2>
                    <p>Start with PHPFusion's open-source core, then shape content, community, themes, and extensions around a project you fully own.</p>
                    <div class="final-actions">
                        <a class="button primary icon" href="https://github.com/PHPFusion/PHPFusion" target="_blank" rel="noopener noreferrer">View on GitHub</a>
                        <a class="button" href="https://www.php-fusion.co.uk/docs/" target="_blank" rel="noopener noreferrer">Explore documentation</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="footer shell">
            <div class="footer-copy">Copyright &copy; <?= date('Y') ?> PHP Fusion Inc. All rights reserved.</div>
            <nav class="footer-legal" aria-label="Legal">
                <a href="https://www.phpfusion.com/legal/?page=code_of_conduct" target="_blank" rel="noopener noreferrer">Code of Conduct</a>
                <a href="https://www.phpfusion.com/legal/?page=privacy_policy" target="_blank" rel="noopener noreferrer">Privacy Policy</a>
            </nav>
            <div class="footer-social" aria-label="PHPFusion links">
                <a href="https://github.com/PHPFusion/PHPFusion" target="_blank" rel="noopener noreferrer" aria-label="PHPFusion on GitHub" title="GitHub"><i data-lucide="github" aria-hidden="true"></i></a>
                <a href="https://www.phpfusion.com/" target="_blank" rel="noopener noreferrer" aria-label="PHPFusion website" title="PHPFusion website"><i data-lucide="globe-2" aria-hidden="true"></i></a>
                <a href="https://www.phpfusion.com/infusions/forum/index.php" target="_blank" rel="noopener noreferrer" aria-label="PHPFusion community forum" title="Community forum"><i data-lucide="messages-square" aria-hidden="true"></i></a>
                <a href="https://www.php-fusion.co.uk/docs/" target="_blank" rel="noopener noreferrer" aria-label="PHPFusion documentation" title="Documentation"><i data-lucide="book-open" aria-hidden="true"></i></a>
            </div>
            <div class="footer-signature"><i data-lucide="heart" aria-hidden="true"></i><span>Made with passion and PHPFusion</span></div>
        </div>
    </footer>
</div>

<script src="https://unpkg.com/lucide@0.468.0/dist/umd/lucide.min.js"></script>
<script>
    (() => {
        if (window.lucide) {
            window.lucide.createIcons();
        }

        const nav = document.getElementById('site-nav');
        const toggle = nav.querySelector('.mobile-toggle');
        toggle.addEventListener('click', () => {
            const open = nav.classList.toggle('mobile-open');
            toggle.setAttribute('aria-expanded', String(open));
        });

        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: .12 });
        document.querySelectorAll('.reveal').forEach((item) => observer.observe(item));

    })();
</script>
</body>
</html>
