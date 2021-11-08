import * as actions from "./actions";

export default {
  *getPresets() {
    actions.setPresetLoading(true);
    const presets = yield actions.fetchFromAPI("preset");
    actions.setPresetLoading(false);
    return actions.setPresets(presets);
  },
  *getReusableVideo(id) {
    const path = `presto-videos/${id}`;
    const preset = yield actions.fetchFromWPAPI(path, {});
    return actions.addVideo(preset?.data || {});
  },
};
