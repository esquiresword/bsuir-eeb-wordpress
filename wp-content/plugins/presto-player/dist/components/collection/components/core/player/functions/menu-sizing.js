export default async player => {
  if (typeof jQuery === 'undefined') {
    return;
  }

  if ('ResizeObserver' in window === false) {
    // Loads polyfill asynchronously, only if required.
    const module = await import('@juggle/resize-observer');
    window.ResizeObserver = module.ResizeObserver;
  }

  var ro = new ResizeObserver(entries => {
    for (let entry of entries) {
      const cr = entry.contentRect;

      jQuery(entry.target)
        .find('.plyr__menu__container')
        .css({ maxHeight: `${cr.height - 48}px` });
    }
  });

  if (!player?.elements?.container) {
    return;
  }
  ro.observe(player?.elements?.container);

  if (!player) {
    return;
  }

  // this resets style on play for some reason
  player.on('playing', () => {
    const cr = player?.elements?.container.getBoundingClientRect();
    jQuery(player?.elements?.container)
      .find('.plyr__menu__container')
      .css({ maxHeight: `${cr.height - 48}px` });
  });
};
