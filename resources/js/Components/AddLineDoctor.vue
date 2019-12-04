<template>
<div class="flex flex-wrap  md:text-center lg:text-center xl:text-center  ">
    <div class="w-full bg-red-500 md:bg-blue-500 lg:bg-yellow-500 xl:bg-teal-500 " >            
                <h1 class="text-xl">บันทึกสายการปฎิบัติงานของแพทย์ประจำหอผู้ป่วย</h1>
                     
    </div>

   
    <div class="w-full">       
            <label class="font-bold" for="exampleInputEmail1">วันที่ปัจจุบัน: 4-12-2562</label>
            <label for="exampleInputEmail1">
                   
             </label>   
    </div>

     <div class="w-full md:w-1/4 lg:w-1/5 xl:w-1/6">            
                    <label class="font-bold" for="exampleInputPassword1">เลือกชื่อหอผู้ป่วย :</label>
     </div>
    <div class="w-full  md:w-1/4 lg:w-1/5 xl:w-1/6 inline-block relative "> 
                    <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"  name="ward" > 
                            <option value="1">อัษฎางค์ 6 เหนือ</option>
                            <option value="2">อัษฎางค์ 6 ใต้</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                     <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
           
     </div>

     <div class=" w-full " >
                <table class="table mx-auto w-full " >
                    <thead>
                            <tr>
                                <th class="px-4 py-2" >เลข ว</th>
                                <th class="px-4 py-2">ชื่อแพทย์</th>
                                <th class="px-4 py-2">เลือกสายปฎิบัติงาน</th>
                            </tr>
                    </thead>
                    <tbody id="DataDoctorTable"  >
                        <tr >
                            <td class="border px-4 py-2 border-gray-600">
                                123456
                            </td>
                            <td class="border px-4 py-2  border-gray-600">
                                 นพ.ณเดช คุณกิติยะ
                            </td>
                            <td class="border px-4 py-2  border-gray-600" >
                              
                                 <div class="w-full inline-block relative">
                                        <select  class="appearance-none w-full lg:w-1/2  xl:w-1/2 bg-gray-300 border border-gray-400 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" >
                                            <option>A</option>
                                            <option>B</option>
                                        </select>
                                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 lg:w-1/3 xl:w-1/3">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                        </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2  border-gray-600">
                                234567
                            </td>
                            <td class="border px-4 py-2  border-gray-600">
                                 พญ.ศันสนีย์ คุณกิติยะ
                            </td>
                            <td class="border px-4 py-2  border-gray-600">
                                
                                 <div class="w-full inline-block relative">
                                        <select  class="appearance-none w-full lg:w-1/2 xl:w-1/2 bg-gray-300 border border-gray-400 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" >
                                            <option>A</option>
                                            <option>B</option>
                                        </select>
                                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 lg:w-1/3 xl:w-1/3">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                        </div>
                                </div>
                            </td>
                        </tr>    
                    </tbody>
                </table>
        </div>
       
        <div class=" mx-auto mt-3">          
                <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">บันทึก</button>
        </div>
</div>
</template>