"use strict";(self["webpackChunkfodee_admin"]=self["webpackChunkfodee_admin"]||[]).push([[655],{1655:(e,t,n)=>{n.r(t),n.d(t,{default:()=>S});var l=n(3673),a=n(1959),o=n(8924),u=n(2323),i=n(1853),c=n(8825);const d={class:"text-h6"},r={class:"text-subtitle2"},s=(0,l.aZ)({props:{event:null},emits:["remove","click-action"],setup(e,{emit:t}){const n=e,a=(0,c.Z)(),s=(0,o.Ey)(o.gr);function v(){a.dialog({title:"Eliminar evento",message:"Está seguro que desea eliminar el evento?",ok:!0,cancel:!0}).onOk((()=>{s.remove(Number(n.event.id)).then((()=>{t("remove",Number(n.event.id))})).catch((()=>i.j7.error(["No se pudo eliminar"])))}))}return(e,a)=>{const o=(0,l.up)("q-icon"),i=(0,l.up)("q-chip"),c=(0,l.up)("q-card-section"),s=(0,l.up)("q-card");return(0,l.wg)(),(0,l.j4)(s,null,{default:(0,l.w5)((()=>[(0,l.Wm)(c,null,{default:(0,l.w5)((()=>[(0,l._)("div",{class:"float-right cursor-pointer text-negative",onClick:v},[(0,l.Wm)(o,{name:"mdi-delete"})]),(0,l.Wm)(i,{class:"glossy cursor-pointer",size:"sm",icon:"mdi-"+(n.event.enable?"check":"cancel"),color:""+(n.event.enable?"positive":"negative"),"text-color":"white",label:""+(n.event.enable?"Habilitado":"Deshabilitado")},null,8,["icon","color","label"]),(0,l._)("div",{onClick:a[0]||(a[0]=e=>t("click-action"))},[(0,l._)("div",d,(0,u.zw)(n.event.title),1),(0,l._)("div",r,(0,u.zw)(n.event.date),1)])])),_:1}),(0,l.Wm)(c,{onClick:a[1]||(a[1]=e=>t("click-action"))},{default:(0,l.w5)((()=>[(0,l.Uk)((0,u.zw)(n.event.description),1)])),_:1})])),_:1})}}});var v=n(151),m=n(5589),p=n(4554),f=n(7030),b=n(7518),h=n.n(b);const w=s,g=w;h()(s,"components",{QCard:v.Z,QCardSection:m.Z,QIcon:p.Z,QChip:f.Z});var y=n(8880),q=function(e,t,n,l){function a(e){return e instanceof n?e:new n((function(t){t(e)}))}return new(n||(n=Promise))((function(n,o){function u(e){try{c(l.next(e))}catch(t){o(t)}}function i(e){try{c(l["throw"](e))}catch(t){o(t)}}function c(e){e.done?n(e.value):a(e.value).then(u,i)}c((l=l.apply(e,t||[])).next())}))};const C=(0,l.aZ)({props:{mode:null,event:null},emits:["created","updated"],setup(e,{emit:t}){const n=e,u=(0,o.Ey)(o.gr),c=(0,a.iH)({date:"",description:"",enable:!0,title:"",id:0});function d(){return q(this,void 0,void 0,(function*(){i.j7.loading(),c.value.enable=Number(c.value.enable);try{if("update"===n.mode){const e=yield u.update(Number(c.value.id),c.value);t("updated",e.data)}else{const e=yield u.create(c.value);t("created",e.data)}}catch(e){i.j7.axiosError(e,["Error en el formulario"])}i.j7.loading(!1)}))}return"update"===n.mode&&n.event&&(c.value={id:n.event.id,date:n.event.date,description:n.event.description,enable:n.event.enable,title:n.event.title}),(e,t)=>{const n=(0,l.up)("q-input"),a=(0,l.up)("q-checkbox"),o=(0,l.up)("q-card-section"),u=(0,l.up)("q-btn"),i=(0,l.up)("q-card-actions"),r=(0,l.up)("q-form"),s=(0,l.up)("q-card");return(0,l.wg)(),(0,l.j4)(s,null,{default:(0,l.w5)((()=>[(0,l.Wm)(r,{onSubmit:(0,y.iM)(d,["prevent"])},{default:(0,l.w5)((()=>[(0,l.Wm)(o,{class:"q-gutter-y-sm"},{default:(0,l.w5)((()=>[(0,l.Wm)(n,{modelValue:c.value.title,"onUpdate:modelValue":t[0]||(t[0]=e=>c.value.title=e),type:"text",label:"Título"},null,8,["modelValue"]),(0,l.Wm)(n,{modelValue:c.value.date,"onUpdate:modelValue":t[1]||(t[1]=e=>c.value.date=e),type:"text",label:"Fecha"},null,8,["modelValue"]),(0,l.Wm)(a,{modelValue:c.value.enable,"onUpdate:modelValue":t[2]||(t[2]=e=>c.value.enable=e),label:"Habilitado"},null,8,["modelValue"]),(0,l.Wm)(n,{modelValue:c.value.description,"onUpdate:modelValue":t[3]||(t[3]=e=>c.value.description=e),type:"textarea",label:"Detalles"},null,8,["modelValue"])])),_:1}),(0,l.Wm)(i,null,{default:(0,l.w5)((()=>[(0,l.Wm)(u,{type:"submit",class:"full-width",label:"Enviar",color:"primary"})])),_:1})])),_:1},8,["onSubmit"])])),_:1})}}});var k=n(5269),x=n(1206),Z=n(5735),_=n(9367),W=n(8240);const Q=C,V=Q;h()(C,"components",{QCard:v.Z,QForm:k.Z,QCardSection:m.Z,QInput:x.Z,QCheckbox:Z.Z,QCardActions:_.Z,QBtn:W.Z});var E=function(e,t,n,l){function a(e){return e instanceof n?e:new n((function(t){t(e)}))}return new(n||(n=Promise))((function(n,o){function u(e){try{c(l.next(e))}catch(t){o(t)}}function i(e){try{c(l["throw"](e))}catch(t){o(t)}}function c(e){e.done?n(e.value):a(e.value).then(u,i)}c((l=l.apply(e,t||[])).next())}))};const j=(0,l._)("h3",{class:"text-h4"},"Eventos",-1),H={class:"row q-col-gutter-sm"},U=(0,l.aZ)({setup(e){const t=(0,o.Ey)(o.gr);s();const n=(0,a.iH)([]),u=(0,a.iH)(!1),c=(0,a.iH)(void 0),d=(0,a.iH)("create");function r(){d.value="create",c.value=void 0,u.value=!0}function s(){return E(this,void 0,void 0,(function*(){try{const e=yield t.list();n.value=e.data,console.log("loadEvents",e.data)}catch(e){i.j7.axiosError(e,[])}}))}function v(e){console.log("onCreated",e),n.value.unshift(e),i.j7.success(["Evento Creado"]),u.value=!1,c.value=void 0}function m(e){const t=n.value.findIndex((t=>t.id===e));n.value.splice(t,1)}function p(e){console.log("onUpdated",e);const t=n.value.findIndex((t=>t.id===e.id));n.value[t]=e,i.j7.success(["Evento Actualizado"]),u.value=!1,c.value=void 0}function f(e){d.value="update",c.value=e,u.value=!0,console.log("update",e)}return(e,t)=>{const a=(0,l.up)("q-btn"),o=(0,l.up)("q-card-section"),i=(0,l.up)("q-card"),s=(0,l.up)("q-dialog"),b=(0,l.up)("q-page");return(0,l.wg)(),(0,l.j4)(b,{padding:""},{default:(0,l.w5)((()=>[(0,l.Wm)(i,{class:"no-box-shadow text-grey-9"},{default:(0,l.w5)((()=>[(0,l.Wm)(o,{class:"q-gutter-y-sm q-py-sm"},{default:(0,l.w5)((()=>[j,(0,l.Wm)(a,{color:"positive",icon:"mdi-plus",label:"Crear Evento",onClick:r}),(0,l._)("div",H,[((0,l.wg)(!0),(0,l.iD)(l.HY,null,(0,l.Ko)(n.value,((e,t)=>((0,l.wg)(),(0,l.iD)("div",{class:"col-sm-6 col-md-4 col-lg-3",key:`event-${e.id}-${t}`},[(0,l.Wm)(g,{event:e,onRemove:m,onClickAction:t=>f(e)},null,8,["event","onClickAction"])])))),128))])])),_:1})])),_:1}),(0,l.Wm)(s,{modelValue:u.value,"onUpdate:modelValue":t[0]||(t[0]=e=>u.value=e)},{default:(0,l.w5)((()=>[(0,l.Wm)(V,{style:{"min-width":"20rem"},event:c.value,mode:d.value,onCreated:v,onUpdated:p},null,8,["event","mode"])])),_:1},8,["modelValue"])])),_:1})}}});var z=n(4379),D=n(7455);const N=U,S=N;h()(U,"components",{QPage:z.Z,QCard:v.Z,QCardSection:m.Z,QBtn:W.Z,QDialog:D.Z})}}]);