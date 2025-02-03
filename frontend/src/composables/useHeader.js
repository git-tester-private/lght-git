import { ref, onMounted, onBeforeUnmount } from 'vue';

export function useHeaderState() {
  const isHeaderFixed = ref(false);
  const isMegaMenuVisible = ref(false);
  let headerOffset = 0;
  let hideMegaMenuTimeout = null;

  const updateHeaderState = () => {
    isHeaderFixed.value = window.scrollY >= headerOffset;
  };

  const showMegaMenu = () => {
    clearTimeout(hideMegaMenuTimeout);
    isMegaMenuVisible.value = true;
  };

  const hideMegaMenu = () => {
    hideMegaMenuTimeout = setTimeout(() => {
      isMegaMenuVisible.value = false;
    }, 50);
  };

  onMounted(() => {
    const header = document.getElementById('sticky-header');
    if (header) {
      headerOffset = header.getBoundingClientRect().top + window.scrollY;
    }
    window.addEventListener('scroll', updateHeaderState);
  });

  onBeforeUnmount(() => {
    window.removeEventListener('scroll', updateHeaderState);
  });

  return {
    isHeaderFixed,
    isMegaMenuVisible,
    showMegaMenu,
    hideMegaMenu,
  };
}
