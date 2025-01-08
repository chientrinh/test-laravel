<script setup>
import { Head } from '@inertiajs/vue3'
import IconLIve from '../../Components/Icon/IconLIve.vue'
import IconStar from '../../Components/Icon/IconStar.vue'
import IconCornerKick from '../../Components/Icon/IconCornerKick.vue'
import { ref, reactive, onMounted } from 'vue';

defineProps({
  matchStatus: {
    type: Array,
  },
});
const pageData = reactive({
  competitions: [],
  countLiveMatches: 0,
  activeTab: 'all',
});

const activeTabWatch = (status_ids, tab) => {
  getCompetitionWithMatches(status_ids);
  pageData.activeTab = tab;
};

const getCompetitionWithMatches = async (status_ids = null) => {
  try {
    const response = await axios.get(route('api.get-competition-with-matches', status_ids ? { status_ids } : {}));
    pageData.competitions = response.data?.data
  } catch (error) {
    page.props.errors = error.response.data.errors
  }
};

const countLiveMatches = async () => {
  try {
    const response = await axios.get(route('api.count-live-matches'));
    pageData.countLiveMatches = response.data?.data
  } catch (error) {
    page.props.errors = error.response.data.errors
  }
};

onMounted(() => {
  getCompetitionWithMatches();
  countLiveMatches();
});
</script>

<template>
  <div>

    <Head title="Home" />
    <div class="p-20">
      <div
        class="w-full rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] md:row-span-3 lg:p-10 lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
        <div class="flex gap-4 mb-4">
          <div @click="activeTabWatch(null, 'all')" :class="['rounded-lg py-2 px-3 cursor-pointer',
            pageData.activeTab === 'all' ? 'bg-[#c72a1d] text-white' : 'bg-gray-100']">Tất cả</div>
          <div @click="activeTabWatch(matchStatus['live'], 'live')" :class="['rounded-lg py-2 px-3 flex justify-center items-center gap-2 cursor-pointer',
            pageData.activeTab === 'live' ? 'bg-[#c72a1d] text-white' : 'bg-gray-100']">
            <IconLIve :fill="pageData.activeTab === 'live' ? '#ffffff' : '#000000'" />
            <span>Trực tiếp ({{ pageData.countLiveMatches }})</span>
          </div>
          <div @click="activeTabWatch(matchStatus['end'], 'end')" :class="['rounded-lg py-2 px-3 cursor-pointer',
            pageData.activeTab === 'end' ? 'bg-[#c72a1d] text-white' : 'bg-gray-100']">Đã kết thúc</div>
          <div @click="activeTabWatch(matchStatus['not_started'], 'not_started')" :class="['rounded-lg py-2 px-3 cursor-pointer',
            pageData.activeTab === 'not_started' ? 'bg-[#c72a1d] text-white' : 'bg-gray-100']">Lịch thi đấu</div>
        </div>

        <div v-for="competition in pageData.competitions" :key="competition.id">
          <div class="flex items-center gap-2 bg-gray-100 items-center py-2 px-3  rounded-md">
            <span class="mr-2">
              <IconStar />
            </span>
            <img :src="competition['home_country']['logo']" alt="image" class="w-5 h-4" />
            <span class="text-gray-400 font-bold">{{ competition['home_country']['name'] }}:</span>
            <span class="font-bold">{{ competition['competition_name'] }}</span>
          </div>

          <div v-for="match in competition['matches']" :key="match.id" class="flex border-b items-center gap-2 p-3">
            <span class="mr-2">
              <IconStar />
            </span>
            <div class="flex w-full items-center ">
              <div class="w-1/12 text-gray-400">{{ match['match_time'] }}</div>
              <div class="w-2/12 text-center text-[#c72a1d]">{{ match['status'] }}</div>
              <div class="w-7/12 flex gap-2  justify-center items-center">
                <div class="flex justify-end items-center gap-2 w-5/12 relative">
                  <span class="top-0 left-0 text-right absolute w-full pr-6">{{ match['home_team']['name'] }}</span>
                  <img :src="match['home_team']['logo']" alt="image" class="w-5 h-6" />
                </div>
                <span class="w-1/12 text-center text-[#c72a1d]">{{ match['scores']['fulltime_score'] }}</span>
                <div class="flex justify-start items-center gap-2 w-5/12 relative">
                  <img :src="match['away_team']['logo']" alt="image" class="w-5 h-6" />
                  <span class="top-0 left-0 text-left absolute w-full pl-6">{{ match['away_team']['name'] }}</span>
                </div>
              </div>
              <div class="w-2/12 gap-2 flex justify-end text-gray-400">
                <div>HT {{ match['scores']['halftime_score'] }}</div>
                <div class="flex">
                  <IconCornerKick /> <span>{{ match['scores']['corners'] }}</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>