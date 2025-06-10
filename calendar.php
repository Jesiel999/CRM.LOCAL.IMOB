<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Agenda de Visitas</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">

<div id="calendar-tab" class="tab-content">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-semibold text-gray-800">Agenda de Visitas e Compromissos</h2>
        <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg flex items-center">
            <i class="fas fa-plus mr-2"></i> Novo Compromisso
        </button>
    </div>

    <div class="bg-white rounded-lg shadow overflow-hidden mb-6">
        <div class="p-4 border-b flex justify-between items-center">
            <div class="flex items-center">
                <button id="prev-month" class="p-2 rounded-lg hover:bg-gray-100">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <h3 id="calendar-month-year" class="mx-4 text-lg font-medium">Junho 2023</h3>
                <button id="next-month" class="p-2 rounded-lg hover:bg-gray-100">
                    <i class="fas fa-chevron-right"></i>
                </button>
                <button id="today-btn" class="ml-4 px-4 py-2 bg-blue-600 text-white rounded-lg">Hoje</button>
            </div>
            <div>
                <select class="border rounded-lg px-3 py-2 text-sm">
                    <option>Visualização Semanal</option>
                    <option selected>Visualização Mensal</option>
                    <option>Visualização Diária</option>
                </select>
            </div>
        </div>
        <div class="p-4">
            <div class="grid grid-cols-7 gap-1 mb-2">
                <div class="text-center font-medium text-gray-500 py-2">Dom</div>
                <div class="text-center font-medium text-gray-500 py-2">Seg</div>
                <div class="text-center font-medium text-gray-500 py-2">Ter</div>
                <div class="text-center font-medium text-gray-500 py-2">Qua</div>
                <div class="text-center font-medium text-gray-500 py-2">Qui</div>
                <div class="text-center font-medium text-gray-500 py-2">Sex</div>
                <div class="text-center font-medium text-gray-500 py-2">Sáb</div>
            </div>
            <div id="calendar-days" class="grid grid-cols-7 gap-1">
            </div>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="p-4 border-b">
            <h3 class="text-lg font-medium">Próximos Compromissos</h3>
        </div>
        <div class="divide-y divide-gray-200">
            <div class="p-4 flex items-start hover:bg-gray-50 cursor-pointer">
                <div class="flex-shrink-0 bg-blue-100 p-2 rounded-full text-blue-600">
                    <i class="fas fa-home"></i>
                </div>
                <div class="ml-3 flex-1">
                    <div class="flex items-center justify-between">
                        <h4 class="text-sm font-medium">Visita ao apartamento</h4>
                        <span class="text-xs text-gray-500">10:00 - 11:00</span>
                    </div>
                    <p class="text-sm text-gray-500 mt-1">Av. Paulista, 1000 - apto 123</p>
                    <p class="text-xs text-gray-400 mt-1">Cliente: Carlos Eduardo</p>
                </div>
            </div>
            <div class="p-4 flex items-start hover:bg-gray-50 cursor-pointer">
                <div class="flex-shrink-0 bg-green-100 p-2 rounded-full text-green-600">
                    <i class="fas fa-file-signature"></i>
                </div>
                <div class="ml-3 flex-1">
                    <div class="flex items-center justify-between">
                        <h4 class="text-sm font-medium">Assinatura de contrato</h4>
                        <span class="text-xs text-gray-500">14:00 - 15:00</span>
                    </div>
                    <p class="text-sm text-gray-500 mt-1">Escritório da Imobiliária</p>
                    <p class="text-xs text-gray-400 mt-1">Cliente: Ana Paula</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const monthYearLabel = document.getElementById("calendar-month-year");
    const calendarDays = document.getElementById("calendar-days");
    const prevMonthBtn = document.getElementById("prev-month");
    const nextMonthBtn = document.getElementById("next-month");
    const todayBtn = document.getElementById("today-btn");

    let currentDate = new Date();

    const monthNames = [
        "Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho",
        "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"
    ];

    function updateCalendarHeader() {
        const month = monthNames[currentDate.getMonth()];
        const year = currentDate.getFullYear();
        monthYearLabel.textContent = `${month} ${year}`;
        renderCalendarDays();
    }

    function renderCalendarDays() {
        calendarDays.innerHTML = "";

        const year = currentDate.getFullYear();
        const month = currentDate.getMonth();

        const firstDayOfMonth = new Date(year, month, 1);
        const lastDayOfMonth = new Date(year, month + 1, 0);
        const firstWeekDay = firstDayOfMonth.getDay();
        const totalDays = lastDayOfMonth.getDate();

        // Dias anteriores (do mês passado)
        for (let i = 0; i < firstWeekDay; i++) {
            const emptyDiv = document.createElement("div");
            emptyDiv.className = "h-24 border rounded-lg p-1 bg-gray-50";
            calendarDays.appendChild(emptyDiv);
        }

        // Dias do mês atual
        for (let day = 1; day <= totalDays; day++) {
            const dayDiv = document.createElement("div");
            dayDiv.className = "h-24 border rounded-lg p-1 overflow-hidden bg-white hover:bg-blue-50";
            dayDiv.innerHTML = `<div class="text-right text-sm">${day}</div>`;
            calendarDays.appendChild(dayDiv);
        }
    }

    prevMonthBtn.addEventListener("click", () => {
        currentDate.setMonth(currentDate.getMonth() - 1);
        updateCalendarHeader();
    });

    nextMonthBtn.addEventListener("click", () => {
        currentDate.setMonth(currentDate.getMonth() + 1);
        updateCalendarHeader();
    });

    todayBtn.addEventListener("click", () => {
        currentDate = new Date();
        updateCalendarHeader();
    });

    // Inicialização
    updateCalendarHeader();
</script>

</body>
</html>
