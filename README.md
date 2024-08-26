# Taskio - Sistema de Gerenciamento de Tarefas

O Taskio é um sistema de gerenciamento de tarefas desenvolvido utilizando as seguintes tecnologias:

- **Laravel**: Framework PHP utilizado para o desenvolvimento do backend e lógica de negócios.
- **Livewire**: Biblioteca usada para criar componentes dinâmicos sem a necessidade de escrever código JavaScript, facilitando a criação de interfaces reativas.
- **Volt**: Tema de painel administrativo utilizado para construir uma interface de usuário moderna e amigável.
- **Enums**: Utilizados para definir constantes de maneira mais estruturada, melhorando a legibilidade e a manutenção do código.
- **Observers**: Implementados para monitorar eventos nos modelos e executar ações automáticas, mantendo o código mais limpo e desacoplado.

## Funcionalidades

- **Gerenciamento de Tarefas**: Criação, edição e exclusão de tarefas com controle de status.
- **Interface Dinâmica**: Utilizando Livewire para atualizações em tempo real sem a necessidade de recarregar a página.
- **Tema Responsivo**: Interface moderna e adaptável para diferentes dispositivos, graças ao tema Volt.
- **Enums para Status de Tarefa**: O status das tarefas é gerenciado utilizando Enums, garantindo consistência nos valores possíveis.
- **Observers para Ações Automáticas**: Observadores aplicados para executar ações como enviar notificações ou atualizar logs sempre que tarefas são criadas ou modificadas.
