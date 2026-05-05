# Copilot Instructions

## Project Overview
Sistema administrativo construido con Laravel + FilamentPHP.

## Stack
- Laravel
- FilamentPHP
- TailwindCSS + Vite
- MySQL

## Architecture Rules
- Controllers solo manejan requests/responses
- Lógica de negocio en Services
- Validaciones en Form Requests
- Eloquent ORM obligatorio (evitar raw queries)
- Filament Resources para CRUD

## Coding Standards
- Código limpio y reutilizable
- Evitar duplicación
- Usar eager loading en relaciones
- Nombres descriptivos en inglés

## Filament Rules
- Resources bien estructurados
- Tables con filtros y acciones
- Forms con validación clara

## Frontend Rules
- TailwindCSS limpio y consistente
- Componentización cuando sea posible