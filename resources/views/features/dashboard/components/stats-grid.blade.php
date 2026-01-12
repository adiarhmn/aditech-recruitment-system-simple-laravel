  <!-- Stats Grid -->
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
      <!-- Stat Card 1 -->
      <x-feature::dashboard.components.stats-card title="Total Jobs" value="24" footer="Total number of jobs">
          <x-slot:icon>
              <i data-lucide="briefcase-business"></i>
          </x-slot:icon>
      </x-feature::dashboard.components.stats-card>

      <!-- Stat Card 2 -->
      <x-feature::dashboard.components.stats-card title="Active Candidates" value="1,203" footer="+5% from last month">
          <x-slot:icon>
              <i data-lucide="users"></i>
          </x-slot:icon>
      </x-feature::dashboard.components.stats-card>

      <!-- Stat Card 3 -->
      <x-feature::dashboard.components.stats-card title="New Applications" value="85" footer="+18% from last month">
          <x-slot:icon>
              <i data-lucide="file-text"></i>
          </x-slot:icon>
      </x-feature::dashboard.components.stats-card>

      <!-- Stat Card 4 -->
      <x-feature::dashboard.components.stats-card title="Hired This Month" value="12" footer="0% from last month">
          <x-slot:icon>
              <i data-lucide="user-check"></i>
          </x-slot:icon>
      </x-feature::dashboard.components.stats-card>
  </div>
