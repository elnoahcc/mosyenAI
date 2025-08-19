<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tailwind Full Demo</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

  <div class="container mx-auto p-8 space-y-12">

    <!-- Typography -->
    <section class="space-y-4">
      <h1 class="text-4xl font-extrabold text-blue-600">Heading 1</h1>
      <h2 class="text-3xl font-bold text-green-600">Heading 2</h2>
      <p class="text-base text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      <p class="text-sm text-gray-500 italic">Tailwind small & italic text example.</p>
    </section>

    <!-- Layout / Flex / Grid -->
    <section class="space-y-4">
      <h2 class="text-2xl font-semibold">Flex & Grid</h2>
      <div class="flex gap-4">
        <div class="flex-1 bg-red-200 p-4 text-center">Flex Item 1</div>
        <div class="flex-1 bg-red-400 p-4 text-center">Flex Item 2</div>
        <div class="flex-1 bg-red-600 p-4 text-center text-white">Flex Item 3</div>
      </div>

      <div class="grid grid-cols-3 gap-4 mt-4">
        <div class="bg-yellow-200 p-4">Grid 1</div>
        <div class="bg-yellow-400 p-4">Grid 2</div>
        <div class="bg-yellow-600 p-4 text-white">Grid 3</div>
      </div>
    </section>

    <!-- Buttons / Hover / Shadow -->
    <section class="space-y-4">
      <h2 class="text-2xl font-semibold">Buttons & Hover</h2>
      <div class="flex gap-4 flex-wrap">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded shadow-lg transition duration-300">Primary</button>
        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded shadow-md transition duration-300">Success</button>
        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded shadow-sm transition duration-300">Danger</button>
      </div>
    </section>

    <!-- Forms -->
    <section class="space-y-4">
      <h2 class="text-2xl font-semibold">Forms</h2>
      <form class="space-y-4 max-w-md">
        <input type="text" placeholder="Name" class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
        <input type="email" placeholder="Email" class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-green-400">
        <textarea placeholder="Message" class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-purple-400"></textarea>
        <button type="submit" class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded">Submit</button>
      </form>
    </section>

    <!-- Responsive / Spacing -->
    <section class="space-y-4">
      <h2 class="text-2xl font-semibold">Responsive Boxes</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        <div class="bg-indigo-200 p-6 text-center">Box 1</div>
        <div class="bg-indigo-400 p-6 text-center">Box 2</div>
        <div class="bg-indigo-600 p-6 text-center text-white">Box 3</div>
      </div>
    </section>

  </div>

</body>
</html>
