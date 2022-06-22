<template lang="html">
  <div @dblclick.stop>
    <k-writer
      :inline="true"
      :marks="true"
      :placeholder="field('text').placeholder"
      :value="content.text"
      class="k-block-lead"
      :class="content.size"
      @input="update({ text: $event })"
    />
  </div>
</template>

<script>
export default {
  computed: {
    placeholder () {
      return 'Écrire un paragraphe …';
    }
  },
  mounted: function () {
    console.log(this.content);
  }
};
</script>

<style lang="less" scoped>
.k-writer {
  font-size: 1em;
  font-family: monospace;

  &.canon {
    font-size: 2em;
  }

  &.parangon {
    font-size: 1.8em;
  }

  &.headline {
    font-size: 1.5em;
  }

  &.lead {
    font-size: 1.2em;
  }
}
</style>
