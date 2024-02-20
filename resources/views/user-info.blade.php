<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Info</title>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-8">
        <h1 class="text-2xl font-bold mb-4">User Information</h1>
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Attribute</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Value</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap"><strong>Location</strong></td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $location }}</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap"><strong>Country</strong></td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $country }}</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap"><strong>Hostname</strong></td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $hostname }}</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap"><strong>City</strong></td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $city }}</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap"><strong>Region</strong></td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $region }}</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap"><strong>Organization</strong></td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $org }}</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap"><strong>Postal Code</strong></td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $postal }}</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap"><strong>Timezone</strong></td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $timezone }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>