const { withSelect } = wp.data;

export default function (props) {
  return withSelect((select) => {
    return {
      branding: select("presto-player/player").branding(),
      loading: select("presto-player/player").presetsLoading(),
      presets: select("presto-player/player").getPresets(),
      defaultPreset: select("presto-player/player").getDefaultPreset(),
    };
  });
}
