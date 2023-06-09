<?php

include "config.php";

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bincom Test</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" />
        <script src="js/jquery.min.js"></script>
    </head>
    <body>
        <main>
            <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                <span class="sr-only">Open sidebar</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                </svg>
            </button>
            <aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
                <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
                    <ul class="space-y-2 font-medium">
                        <li>
                            <a href="./" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                            <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
                            <span class="ml-3">All Polling Unit Results</span>
                            </a>
                        </li>
                        <li>
                            <a href="lga_results.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                            <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Check Local Govt. Result</span>
                            </a>
                        </li>
                        <li>
                            <a href="store_result.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                            <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path><path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path></svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Add Score</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </aside>

            <div class="p-4 sm:ml-64">
                <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
                    <div class="w-full text-xl text-center pb-4">
                        Check Local Govt. Results
                    </div>

                    <form id="addform" method="post" class="relative overflow-x-auto shadow-md sm:rounded-lg p-4">
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label for="polling_unit" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Polling Unit</label>
                                <select id="polling_unit" name="polling_unit" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="">--- Select Pollint Unit ---</option>
                                    <?php
                                    $pu = "SELECT * FROM polling_unit";
                                    $re = $conn->query($pu);
                                    if ($re->num_rows > 0) {
                                        while($mee = $re->fetch_assoc()) {
                                            $uniqueid = $mee["uniqueid"];
                                            $pu_name = $mee["polling_unit_name"];
                                    ?>
                                        <option value="<?php echo $uniqueid ?>"><?php echo $pu_name ?></option>
                                    <?php
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div>
                                <label for="party" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Polling Unit</label>
                                <select id="party" name="party" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="">--- Select Party ---</option>
                                    <?php
                                    $party = "SELECT * FROM party";
                                    $r = $conn->query($party);
                                    if ($r->num_rows > 0) {
                                        while($me = $r->fetch_assoc()) {
                                            $party_id = $me["partyid"];
                                            $party_name = $me["partyname"];
                                    ?>
                                        <option value="<?php echo $party_id ?>"><?php echo $party_name ?></option>
                                    <?php
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <input type="number" id="score" name="score" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <div id="resp"></div>
                            <button type="submit" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Save</button>
                        </div>
                    </form>
                </div>
            </div>
            
        </main>
    </body>
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        $(document).ready(function() {
            // submit registeration
            $("#addform").submit(function(e) {
                e.preventDefault();

                $("#resp").html("<div role='alert'> <div class='border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700'> <p>Verifying</p> </div> </div>");
                var formData = new FormData(this);

                $.ajax({
                    url: 'add_result.php',
                    type: 'POST',
                    data: formData,
                    success: function(data) {
                        if (data == 'yes') {
                            // window.location.href = "admins.php";
                            $("#resp").html("<div role='alert'> <div class='border border-t-0 border-green-400 rounded-b bg-green-100 px-4 py-3 text-green-700'> <p>Score added</p> </div> </div>");
                            $("#addform")[0].reset();
                        } else {
                            $("#resp").html(data).show("slow");
                            // $("#resp").html(data);
                        }
                        // $("#aform")[0].reset();
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
            });

        });
    </script>
</html>