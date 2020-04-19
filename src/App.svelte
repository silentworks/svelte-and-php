<svelte:options tag="app-asignature" />
<script>
    export let data;
    let parsedData = [];
    $: if (data) parsedData = JSON.parse(data);
</script>

<main>
    <hr />
    <h3>Component BODY {data}</h3>
    <p>Data from php render in component svelte</p>
    <ul>
        {#each parsedData as d}
            <li id="{d.id}">{d.name}</li>
        {/each}
    </ul>
</main>