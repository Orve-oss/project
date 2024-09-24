<template>
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Liste des clients</h4>
                        <div class="card-header-form">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup"
                                                    data-checkbox-role="dad" class="custom-control-input"
                                                    id="checkbox-all">
                                                <!-- <label for="checkbox-all" class="custom-control-label">&nbsp;</label> -->
                                            </div>
                                        </th>
                                        <th>Nom</th>
                                        <th>Email</th>
                                        <th>Actif</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody v-if="clients.length > 0">
                                    <tr v-for="(clist, index) in clients" :key="index">
                                        <td class="p-0 text-center">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup"
                                                    class="custom-control-input" id="checkbox-1">
                                                <!-- <label for="checkbox-1" class="custom-control-label">&nbsp;</label> -->
                                            </div>
                                        </td>
                                        <td>{{ clist.nom }}</td>
                                        <td>{{ clist.email }}</td>
                                        <td>
                                            <div class="badge badge-success">{{ clist.actif }}</div>
                                        </td>
                                        <td>
                                            <button class="btn btn-icon btn-primary me-1"><i
                                                    class="far fa-edit"></i></button>
                                            <button class="btn btn-icon btn-danger"><i
                                                    class="fas fa-times"></i></button>
                                            <button class="btn btn-secondary me-1">Detail</button>
                                            <button class="btn btn-dark me-1">Desactiver</button>
                                        </td>
                                    </tr>
                                </tbody>


                                <tbody v-else align="center" colspan="5"> Aucun enregistrement</tbody>


                                <!-- <tr>
                                    <td class="p-0 text-center">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" data-checkboxes="mygroup"
                                                class="custom-control-input" id="checkbox-2">
                                            <label for="checkbox-2" class="custom-control-label">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td>Redesign homepage</td>
                                    <td>2018-04-10</td>
                                    <td>
                                        <div class="badge badge-info">Todo</div>
                                    </td>
                                    <td>
                                        <button class="btn btn-icon btn-primary me-1"><i
                                                class="far fa-edit"></i></button>
                                        <button class="btn btn-icon btn-danger"><i class="fas fa-times"></i></button>
                                        <button class="btn btn-secondary me-1">Detail</button>
                                        <button class="btn btn-dark me-1">Desactiver</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-0 text-center">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" data-checkboxes="mygroup"
                                                class="custom-control-input" id="checkbox-3">
                                            <label for="checkbox-3" class="custom-control-label">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td>Backup database</td>

                                    <td>2018-01-29</td>
                                    <td>
                                        <div class="badge badge-warning">In Progress</div>
                                    </td>
                                    <td>
                                        <button class="btn btn-icon btn-primary me-1"><i
                                                class="far fa-edit"></i></button>
                                        <button class="btn btn-icon btn-danger"><i class="fas fa-times"></i></button>
                                        <button class="btn btn-secondary me-1">Detail</button>
                                        <button class="btn btn-dark me-1">Desactiver</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-0 text-center">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" data-checkboxes="mygroup"
                                                class="custom-control-input" id="checkbox-4">
                                            <label for="checkbox-4" class="custom-control-label">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td>Input data</td>

                                    <td>2018-01-16</td>
                                    <td>
                                        <div class="badge badge-success">Completed</div>
                                    </td>
                                    <td>
                                        <button class="btn btn-icon btn-primary me-1"><i
                                                class="far fa-edit"></i></button>
                                        <button class="btn btn-icon btn-danger"><i class="fas fa-times"></i></button>
                                        <button class="btn btn-secondary me-1">Detail</button>
                                        <button class="btn btn-dark me-1">Desactiver</button>

                                    </td>
                                </tr> -->
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import axios from 'axios';
import { ref, onMounted } from 'vue';

let clients = ref([]); //declarer un tableau pour contenir la liste des clients

const getClients = async () => {
    
  let response = await axios.get(`/list`);
clients.value = response.data;
  
};

onMounted(() => {
    getClients();
})
</script>
