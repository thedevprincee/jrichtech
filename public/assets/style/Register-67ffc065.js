import{W as c,r as p,j as e,a as x,d as h}from"./app-e1185e0f.js";import{G as f}from"./GuestLayout-8e333c70.js";import{I as m}from"./InputError-f4838342.js";import{I as t}from"./InputLabel-3b2108ad.js";import{P as g}from"./PrimaryButton-0c29ffd3.js";import{T as n}from"./TextInput-14e36d2b.js";function y(){const{data:a,setData:r,post:l,processing:i,errors:o,reset:d}=c({name:"",username:"",email:"",phone:"",password_confirmation:""});p.useEffect(()=>()=>{d("password","password_confirmation")},[]);const u=s=>{s.preventDefault(),l(route("register"))};return e.jsxs(f,{children:[e.jsx(x,{title:"Register"}),e.jsx("p",{className:"text-primary text-4xl font-medium mb-12",children:"Create a new account"}),e.jsxs("form",{onSubmit:u,children:[e.jsxs("div",{className:"grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-8",children:[e.jsxs("div",{children:[e.jsx(t,{htmlFor:"name",value:"Name"}),e.jsx(n,{id:"name",name:"name",value:a.name,className:"mt-1 block w-full rounded-2xl",autoComplete:"name",isFocused:!0,onChange:s=>r("name",s.target.value),required:!0}),e.jsx(m,{message:o.name,className:"mt-2"})]}),e.jsxs("div",{children:[e.jsx(t,{htmlFor:"username",value:"Username"}),e.jsx(n,{id:"username",name:"username",value:a.username,className:"mt-1 block w-full rounded-2xl",autoComplete:"username",isFocused:!0,onChange:s=>r("username",s.target.value),required:!0}),e.jsx(m,{message:o.username,className:"mt-2"})]}),e.jsxs("div",{className:"",children:[e.jsx(t,{htmlFor:"email",value:"Email"}),e.jsx(n,{id:"email",type:"email",name:"email",value:a.email,className:"mt-1 block w-full rounded-2xl",autoComplete:"username",onChange:s=>r("email",s.target.value),required:!0}),e.jsx(m,{message:o.email,className:"mt-2"})]}),e.jsxs("div",{className:"",children:[e.jsx(t,{htmlFor:"phone",value:"Phone Number"}),e.jsx(n,{id:"phone",type:"number",name:"phone",value:a.phone,className:"mt-1 block w-full rounded-2xl",onChange:s=>r("phone",s.target.value),required:!0}),e.jsx(m,{message:o.phone,className:"mt-2"})]}),e.jsx("div",{className:"hidden md:block md:col-span-2",children:e.jsx("hr",{})}),e.jsxs("div",{className:"",children:[e.jsx(t,{htmlFor:"password",value:"Password"}),e.jsx(n,{id:"password",type:"password",name:"password",value:a.password,className:"mt-1 block w-full rounded-2xl",autoComplete:"new-password",onChange:s=>r("password",s.target.value),required:!0}),e.jsx(m,{message:o.password,className:"mt-2"})]}),e.jsxs("div",{className:"",children:[e.jsx(t,{htmlFor:"password_confirmation",value:"Confirm Password"}),e.jsx(n,{id:"password_confirmation",type:"password",name:"password_confirmation",value:a.password_confirmation,className:"mt-1 block w-full rounded-2xl",autoComplete:"new-password",onChange:s=>r("password_confirmation",s.target.value),required:!0}),e.jsx(m,{message:o.password_confirmation,className:"mt-2"})]})]}),e.jsxs("div",{className:"flex items-center justify-between mt-4",children:[e.jsx(h,{href:route("login"),className:"underline text-sm text-blue-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500",children:"Already registered?  Login"}),e.jsx(g,{className:"ml-4 bg-primary/90 hover:bg-primary rounded-2xl",disabled:i,children:"Create Account"})]})]})]})}export{y as default};