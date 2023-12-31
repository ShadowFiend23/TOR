<x-authenticated_layout>

<div class="container-lg px-3">
  <h1 class="app-page-title">Dashboard</h1>
  <div class="alert alert-dismissible alert-info">
    Hi Rosalinda!, Welcome to your Dashboard
  </div>
  <div class="d-flex align-items-center justify-content-end p-2">
    <a href="course/new"  class="btn btn-success shadow text-white"><span class="text-white">

      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"/>
      </svg>
    </span>Add Course</a>
  </div>
  <div class="row g-4 mb-4">
    <div class="col-12 col-md-6">
      <div class="app-card app-card-stat shadow-sm h-100 bg-danger">
        <a href="../department/edit" class="icon-wrapper d-flex align-items-center justify-content-end pt-4 px-4 text-decoration-none">
          <span class="text-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
            </svg>
          </span>
        </a>
        <div class="app-card-body p-3 p-lg-4">
          <h4 class="mb-2 text-white">Bachelor of Science in Information Technology</h4>
          <div class="stats-figure d-flex flex-row align-items-center justify-content-around gap-2">
            <div class="students-info d-flex flex-column align-items-center justify-content-center">
              <h2 class="text-white mt-4">227</h2>
              <p class="text-white fs-6">Total Students</p>
            </div>
            <div class="icon-wrapper">
              <svg width="127" height="75" viewBox="0 0 127 75" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M124.385 23.4299L99.2597 14.1799C98.6162 13.94 97.9193 13.94 97.2759 14.1799L72.1509 23.4299C71.5514 23.6492 71.0256 24.0631 70.6423 24.6174C70.259 25.1717 70.0359 25.8408 70.0021 26.5373C69.9993 26.598 69.9993 26.6588 70.0021 26.7195V49.8445C70.0021 50.7644 70.333 51.6467 70.922 52.2972C71.511 52.9477 72.3098 53.3132 73.1428 53.3132C73.9757 53.3132 74.7745 52.9477 75.3635 52.2972C75.9525 51.6467 76.2834 50.7644 76.2834 49.8445V31.5323L82.4887 33.8159C80.5629 37.8874 79.9906 42.5758 80.8715 47.0651C81.7523 51.5545 84.0305 55.5606 87.3096 58.3863C83.0185 60.7234 79.3869 64.3106 76.8068 68.7607C76.5745 69.1421 76.4131 69.5707 76.3321 70.0216C76.251 70.4725 76.2519 70.9367 76.3347 71.3872C76.4175 71.8377 76.5806 72.2656 76.8144 72.6459C77.0483 73.0262 77.3482 73.3513 77.6968 73.6025C78.0454 73.8536 78.4358 74.0257 78.8451 74.1087C79.2545 74.1918 79.6747 74.1842 80.0814 74.0863C80.4881 73.9884 80.8731 73.8022 81.214 73.5385C81.5549 73.2748 81.845 72.9389 82.0674 72.5503C85.8021 66.2025 91.7248 62.5632 98.2678 62.5632C104.811 62.5632 110.733 66.2025 114.481 72.5503C114.704 72.9389 114.994 73.2748 115.335 73.5385C115.676 73.8022 116.061 73.9884 116.467 74.0863C116.874 74.1842 117.294 74.1918 117.703 74.1087C118.113 74.0257 118.503 73.8536 118.852 73.6025C119.2 73.3513 119.5 73.0262 119.734 72.6459C119.968 72.2656 120.131 71.8377 120.214 71.3872C120.297 70.9367 120.298 70.4725 120.217 70.0216C120.136 69.5707 119.974 69.1421 119.742 68.7607C117.159 64.3054 113.523 60.7149 109.226 58.3776C112.505 55.5519 114.783 51.5458 115.664 47.0564C116.545 42.5671 115.973 37.8787 114.047 33.8073L124.385 30.0003C125.009 29.7695 125.552 29.3278 125.937 28.7374C126.322 28.1471 126.529 27.4382 126.529 26.7108C126.529 25.9834 126.322 25.2744 125.937 24.6841C125.552 24.0938 125.009 23.652 124.385 23.4212V23.4299ZM98.2678 21.1174L113.461 26.7195L98.2678 32.3128L83.0881 26.7195L98.2678 21.1174ZM109.783 42.907C109.784 44.8825 109.367 46.831 108.567 48.5979C107.767 50.3649 106.606 51.9017 105.174 53.0866C103.743 54.2714 102.082 55.0718 100.322 55.4241C98.5618 55.7765 96.7517 55.6712 95.0349 55.1166C93.3182 54.562 91.742 53.5733 90.4314 52.229C89.1207 50.8846 88.1116 49.2215 87.4841 47.3715C86.8566 45.5215 86.6279 43.5355 86.8161 41.571C87.0043 39.6064 87.6043 37.7172 88.5685 36.0533L97.2759 39.259C97.9194 39.498 98.6161 39.498 99.2597 39.259L107.967 36.0533C109.155 38.0984 109.785 40.4773 109.783 42.907Z" fill="white"/>
                <path d="M88.3847 9.42992L63.2597 0.17992C62.6162 -0.0599734 61.9193 -0.0599734 61.2759 0.17992L36.1509 9.42992C35.5514 9.64922 35.0256 10.0631 34.6423 10.6174C34.259 11.1717 34.0359 11.8408 34.0021 12.5373C33.9993 12.598 33.9993 12.6588 34.0021 12.7195V35.8445C34.0021 36.7644 34.333 37.6467 34.922 38.2972C35.511 38.9477 36.3098 39.3132 37.1428 39.3132C37.9757 39.3132 38.7745 38.9477 39.3635 38.2972C39.9525 37.6467 40.2834 36.7644 40.2834 35.8445V17.5323L46.4887 19.8159C44.5629 23.8874 43.9906 28.5758 44.8715 33.0651C45.7523 37.5545 48.0305 41.5606 51.3096 44.3863C47.0185 46.7234 43.3869 50.3106 40.8068 54.7607C40.5745 55.1421 40.4131 55.5707 40.3321 56.0216C40.251 56.4725 40.2519 56.9367 40.3347 57.3872C40.4175 57.8377 40.5806 58.2656 40.8144 58.6459C41.0483 59.0262 41.3482 59.3513 41.6968 59.6025C42.0454 59.8536 42.4358 60.0257 42.8451 60.1087C43.2545 60.1918 43.6747 60.1842 44.0814 60.0863C44.4881 59.9884 44.8731 59.8022 45.214 59.5385C45.5549 59.2748 45.845 58.9389 46.0674 58.5503C49.8021 52.2025 55.7248 48.5632 62.2678 48.5632C68.8107 48.5632 74.7334 52.2025 78.4813 58.5503C78.7036 58.9389 78.9937 59.2748 79.3346 59.5385C79.6756 59.8022 80.0606 59.9884 80.4672 60.0863C80.8739 60.1842 81.2941 60.1918 81.7035 60.1087C82.1129 60.0257 82.5032 59.8536 82.8518 59.6025C83.2004 59.3513 83.5004 59.0262 83.7342 58.6459C83.968 58.2656 84.1311 57.8377 84.2139 57.3872C84.2967 56.9367 84.2976 56.4725 84.2166 56.0216C84.1355 55.5707 83.9741 55.1421 83.7418 54.7607C81.1592 50.3054 77.5228 46.7149 73.2259 44.3776C76.505 41.5519 78.7832 37.5458 79.6641 33.0564C80.5449 28.5671 79.9726 23.8787 78.0468 19.8073L88.3847 16.0003C89.0092 15.7695 89.5523 15.3278 89.9371 14.7374C90.3218 14.1471 90.5289 13.4382 90.5289 12.7108C90.5289 11.9834 90.3218 11.2744 89.9371 10.6841C89.5523 10.0938 89.0092 9.65203 88.3847 9.42125V9.42992ZM62.2678 7.11742L77.4605 12.7195L62.2678 18.3128L47.0881 12.7195L62.2678 7.11742ZM73.7834 28.907C73.7837 30.8825 73.3674 32.831 72.5674 34.5979C71.7674 36.3649 70.6057 37.9017 69.1745 39.0866C67.7432 40.2714 66.0818 41.0718 64.3218 41.4241C62.5618 41.7765 60.7517 41.6712 59.0349 41.1166C57.3182 40.562 55.742 39.5733 54.4314 38.229C53.1207 36.8846 52.1116 35.2215 51.4841 33.3715C50.8566 31.5215 50.6279 29.5355 50.8161 27.571C51.0043 25.6064 51.6043 23.7172 52.5685 22.0533L61.2759 25.259C61.9194 25.498 62.6161 25.498 63.2597 25.259L71.9671 22.0533C73.1547 24.0984 73.7852 26.4773 73.7834 28.907Z" fill="white"/>
                <path d="M54.3847 23.4299L29.2597 14.1799C28.6162 13.94 27.9193 13.94 27.2759 14.1799L2.15086 23.4299C1.55135 23.6492 1.02563 24.063 0.642316 24.6174C0.259004 25.1717 0.035907 25.8408 0.00214766 26.5373C-0.000715886 26.598 -0.000715886 26.6588 0.00214766 26.7195V49.8445C0.00214766 50.7644 0.333034 51.6467 0.922015 52.2972C1.511 52.9477 2.30983 53.3132 3.14277 53.3132C3.97572 53.3132 4.77455 52.9477 5.36353 52.2972C5.95251 51.6467 6.2834 50.7644 6.2834 49.8445V31.5323L12.4887 33.8159C10.5629 37.8874 9.99062 42.5757 10.8715 47.0651C11.7523 51.5545 14.0305 55.5606 17.3096 58.3863C13.0185 60.7234 9.38693 64.3106 6.80684 68.7607C6.57449 69.1421 6.4131 69.5707 6.33206 70.0216C6.25101 70.4725 6.25191 70.9367 6.33472 71.3872C6.41753 71.8377 6.5806 72.2656 6.81443 72.6459C7.04826 73.0261 7.3482 73.3513 7.69682 73.6025C8.04543 73.8536 8.43577 74.0257 8.84513 74.1087C9.2545 74.1918 9.67473 74.1842 10.0814 74.0863C10.4881 73.9884 10.8731 73.8022 11.214 73.5385C11.5549 73.2748 11.845 72.9389 12.0674 72.5503C15.8021 66.2025 21.7248 62.5632 28.2678 62.5632C34.8107 62.5632 40.7334 66.2025 44.4813 72.5503C44.7036 72.9389 44.9937 73.2748 45.3346 73.5385C45.6756 73.8022 46.0606 73.9884 46.4672 74.0863C46.8739 74.1842 47.2941 74.1918 47.7035 74.1087C48.1129 74.0257 48.5032 73.8536 48.8518 73.6025C49.2004 73.3513 49.5004 73.0261 49.7342 72.6459C49.968 72.2656 50.1311 71.8377 50.2139 71.3872C50.2967 70.9367 50.2976 70.4725 50.2166 70.0216C50.1355 69.5707 49.9741 69.1421 49.7418 68.7607C47.1592 64.3054 43.5228 60.7149 39.2259 58.3776C42.505 55.5519 44.7832 51.5458 45.6641 47.0564C46.5449 42.5671 45.9726 37.8787 44.0468 33.8073L54.3847 30.0003C55.0092 29.7695 55.5523 29.3278 55.9371 28.7374C56.3218 28.1471 56.5289 27.4382 56.5289 26.7108C56.5289 25.9834 56.3218 25.2744 55.9371 24.6841C55.5523 24.0938 55.0092 23.652 54.3847 23.4212V23.4299ZM28.2678 21.1174L43.4605 26.7195L28.2678 32.3128L13.0881 26.7195L28.2678 21.1174ZM39.7834 42.907C39.7837 44.8825 39.3674 46.831 38.5674 48.5979C37.7674 50.3649 36.6057 51.9017 35.1745 53.0866C33.7432 54.2714 32.0818 55.0718 30.3218 55.4241C28.5618 55.7765 26.7517 55.6712 25.0349 55.1166C23.3182 54.562 21.742 53.5733 20.4314 52.229C19.1207 50.8846 18.1116 49.2215 17.4841 47.3715C16.8566 45.5215 16.6279 43.5355 16.8161 41.571C17.0043 39.6064 17.6043 37.7172 18.5685 36.0533L27.2759 39.259C27.9194 39.498 28.6161 39.498 29.2597 39.259L37.9671 36.0533C39.1547 38.0984 39.7852 40.4773 39.7834 42.907Z" fill="white"/>
              </svg>
            </div>
          </div>
          <hr>
          <a href="#" class='stats-meta text-success'>
            <div class="d-flex footer-icon align-items-center justify-content-end gap-2">
              <svg width="23" height="26" viewBox="0 0 23 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.5446 21.6667H4.79167V6.50002H2.875V21.6667C2.875 22.2413 3.07693 22.7924 3.43638 23.1988C3.79582 23.6051 4.28333 23.8334 4.79167 23.8334H13.2346C12.8821 23.1687 12.6478 22.4328 12.5446 21.6667ZM18.2083 2.16669H13.4167V7.58335L11.5 5.95835L9.58333 7.58335V2.16669H8.625C8.11667 2.16669 7.62916 2.39496 7.26971 2.80129C6.91027 3.20762 6.70833 3.75872 6.70833 4.33335V17.3334C6.70833 17.908 6.91027 18.4591 7.26971 18.8654C7.62916 19.2717 8.11667 19.5 8.625 19.5H12.5446C12.6841 18.5658 13.0027 17.6773 13.4779 16.8969C13.9531 16.1164 14.5735 15.4629 15.2957 14.9819C16.0178 14.501 16.8242 14.2044 17.6584 14.1128C18.4926 14.0212 19.3345 14.1369 20.125 14.4517V4.33335C20.125 3.75872 19.9231 3.20762 19.5636 2.80129C19.2042 2.39496 18.7167 2.16669 18.2083 2.16669ZM19.1667 16.25V19.5H22.0417V21.6667H19.1667V24.9167H17.25V21.6667H14.375V19.5H17.25V16.25H19.1667Z" fill="white"/>
              </svg>
              <svg width="33" height="18" viewBox="0 0 33 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M32.431 5.35098L25.7641 3.04486C25.5934 2.98505 25.4084 2.98505 25.2377 3.04486L18.5707 5.35098C18.4117 5.40566 18.2722 5.50883 18.1704 5.64703C18.0687 5.78523 18.0095 5.95205 18.0006 6.1257C17.9998 6.14082 17.9998 6.15598 18.0006 6.1711V11.9364C18.0006 12.1658 18.0884 12.3857 18.2447 12.5479C18.4009 12.7101 18.6129 12.8012 18.8339 12.8012C19.055 12.8012 19.2669 12.7101 19.4232 12.5479C19.5795 12.3857 19.6673 12.1658 19.6673 11.9364V7.37101L21.3139 7.94033C20.8029 8.95538 20.651 10.1242 20.8848 11.2435C21.1185 12.3627 21.723 13.3615 22.5931 14.066C21.4545 14.6486 20.4908 15.543 19.8062 16.6524C19.7445 16.7475 19.7017 16.8544 19.6802 16.9668C19.6587 17.0792 19.659 17.1949 19.6809 17.3073C19.7029 17.4196 19.7462 17.5262 19.8082 17.6211C19.8703 17.7159 19.9499 17.7969 20.0424 17.8595C20.1349 17.9222 20.2384 17.9651 20.3471 17.9858C20.4557 18.0065 20.5672 18.0046 20.6751 17.9802C20.783 17.9558 20.8852 17.9093 20.9756 17.8436C21.0661 17.7779 21.1431 17.6941 21.2021 17.5972C22.1931 16.0147 23.7647 15.1073 25.5009 15.1073C27.2371 15.1073 28.8087 16.0147 29.8032 17.5972C29.8622 17.6941 29.9391 17.7779 30.0296 17.8436C30.1201 17.9093 30.2222 17.9558 30.3301 17.9802C30.438 18.0046 30.5496 18.0065 30.6582 17.9858C30.7668 17.9651 30.8704 17.9222 30.9629 17.8595C31.0554 17.7969 31.135 17.7159 31.197 17.6211C31.2591 17.5262 31.3023 17.4196 31.3243 17.3073C31.3463 17.1949 31.3465 17.0792 31.325 16.9668C31.3035 16.8544 31.2607 16.7475 31.199 16.6524C30.5138 15.5417 29.5488 14.6465 28.4086 14.0638C29.2788 13.3594 29.8833 12.3606 30.117 11.2413C30.3508 10.1221 30.1989 8.95322 29.6879 7.93817L32.431 6.98905C32.5968 6.93152 32.7409 6.82138 32.843 6.67421C32.9451 6.52703 33 6.35028 33 6.16894C33 5.98759 32.9451 5.81084 32.843 5.66367C32.7409 5.5165 32.5968 5.40636 32.431 5.34882V5.35098ZM25.5009 4.77445L29.5323 6.1711L25.5009 7.56558L21.4729 6.1711L25.5009 4.77445ZM28.5566 10.2068C28.5567 10.6993 28.4462 11.1851 28.2339 11.6256C28.0216 12.0662 27.7134 12.4493 27.3336 12.7447C26.9538 13.0401 26.5129 13.2396 26.0459 13.3275C25.5789 13.4153 25.0986 13.3891 24.643 13.2508C24.1875 13.1126 23.7693 12.8661 23.4215 12.5309C23.0737 12.1957 22.8059 11.7811 22.6394 11.3199C22.4729 10.8587 22.4122 10.3635 22.4622 9.87374C22.5121 9.38395 22.6713 8.91297 22.9272 8.49813L25.2377 9.29734C25.4085 9.35694 25.5933 9.35694 25.7641 9.29734L28.0746 8.49813C28.3897 9.00799 28.557 9.60109 28.5566 10.2068Z" fill="white"/>
                <path d="M23.431 2.35098L16.7641 0.0448561C16.5934 -0.014952 16.4084 -0.014952 16.2377 0.0448561L9.57073 2.35098C9.41165 2.40566 9.27215 2.50883 9.17044 2.64703C9.06873 2.78523 9.00953 2.95205 9.00057 3.1257C8.99981 3.14082 8.99981 3.15598 9.00057 3.1711V8.93642C9.00057 9.16577 9.08837 9.38574 9.24466 9.54792C9.40094 9.7101 9.61292 9.80121 9.83394 9.80121C10.055 9.80121 10.2669 9.7101 10.4232 9.54792C10.5795 9.38574 10.6673 9.16577 10.6673 8.93642V4.37101L12.3139 4.94033C11.8029 5.95538 11.651 7.12425 11.8848 8.2435C12.1185 9.36274 12.723 10.3615 13.5931 11.066C12.4545 11.6486 11.4908 12.543 10.8062 13.6524C10.7445 13.7475 10.7017 13.8544 10.6802 13.9668C10.6587 14.0792 10.659 14.1949 10.6809 14.3073C10.7029 14.4196 10.7462 14.5262 10.8082 14.6211C10.8703 14.7159 10.9499 14.7969 11.0424 14.8595C11.1349 14.9222 11.2384 14.9651 11.3471 14.9858C11.4557 15.0065 11.5672 15.0046 11.6751 14.9802C11.783 14.9558 11.8852 14.9093 11.9756 14.8436C12.0661 14.7779 12.1431 14.6941 12.2021 14.5972C13.1931 13.0147 14.7647 12.1073 16.5009 12.1073C18.2371 12.1073 19.8087 13.0147 20.8032 14.5972C20.8622 14.6941 20.9391 14.7779 21.0296 14.8436C21.1201 14.9093 21.2222 14.9558 21.3301 14.9802C21.438 15.0046 21.5496 15.0065 21.6582 14.9858C21.7668 14.9651 21.8704 14.9222 21.9629 14.8595C22.0554 14.7969 22.135 14.7159 22.197 14.6211C22.2591 14.5262 22.3023 14.4196 22.3243 14.3073C22.3463 14.1949 22.3465 14.0792 22.325 13.9668C22.3035 13.8544 22.2607 13.7475 22.199 13.6524C21.5138 12.5417 20.5488 11.6465 19.4086 11.0638C20.2788 10.3594 20.8833 9.36058 21.117 8.24133C21.3508 7.12209 21.1989 5.95322 20.6879 4.93817L23.431 3.98905C23.5968 3.93152 23.7409 3.82138 23.843 3.67421C23.9451 3.52703 24 3.35028 24 3.16894C24 2.98759 23.9451 2.81084 23.843 2.66367C23.7409 2.5165 23.5968 2.40636 23.431 2.34882V2.35098ZM16.5009 1.77445L20.5323 3.1711L16.5009 4.56558L12.4729 3.1711L16.5009 1.77445ZM19.5566 7.20682C19.5567 7.69935 19.4462 8.18512 19.2339 8.62564C19.0216 9.06616 18.7134 9.4493 18.3336 9.74471C17.9538 10.0401 17.5129 10.2396 17.0459 10.3275C16.5789 10.4153 16.0986 10.3891 15.643 10.2508C15.1875 10.1126 14.7693 9.86606 14.4215 9.5309C14.0737 9.19573 13.8059 8.78111 13.6394 8.31989C13.4729 7.85867 13.4122 7.36353 13.4622 6.87374C13.5121 6.38395 13.6713 5.91297 13.9272 5.49813L16.2377 6.29734C16.4085 6.35694 16.5933 6.35694 16.7641 6.29734L19.0746 5.49813C19.3897 6.00799 19.557 6.60109 19.5566 7.20682Z" fill="white"/>
                <path d="M14.431 5.35098L7.76409 3.04486C7.59335 2.98505 7.40842 2.98505 7.23768 3.04486L0.570733 5.35098C0.411653 5.40566 0.272152 5.50883 0.170439 5.64703C0.0687269 5.78523 0.00952795 5.95205 0.000569884 6.1257C-0.000189961 6.14082 -0.000189961 6.15598 0.000569884 6.1711V11.9364C0.000569884 12.1658 0.088371 12.3857 0.244658 12.5479C0.400945 12.7101 0.612915 12.8012 0.833938 12.8012C1.05496 12.8012 1.26693 12.7101 1.42322 12.5479C1.57951 12.3857 1.66731 12.1658 1.66731 11.9364V7.37101L3.3139 7.94033C2.80288 8.95538 2.65102 10.1242 2.88475 11.2435C3.11849 12.3627 3.72301 13.3615 4.59312 14.066C3.45448 14.6486 2.49083 15.543 1.8062 16.6524C1.74455 16.7475 1.70172 16.8544 1.68022 16.9668C1.65871 17.0792 1.65895 17.1949 1.68093 17.3073C1.7029 17.4196 1.74617 17.5262 1.80822 17.6211C1.87026 17.7159 1.94985 17.7969 2.04236 17.8595C2.13487 17.9222 2.23844 17.9651 2.34707 17.9858C2.45569 18.0065 2.5672 18.0046 2.67511 17.9802C2.78302 17.9558 2.88518 17.9093 2.97564 17.8436C3.06611 17.7779 3.14309 17.6941 3.20209 17.5972C4.19311 16.0147 5.7647 15.1073 7.50089 15.1073C9.23707 15.1073 10.8087 16.0147 11.8032 17.5972C11.8622 17.6941 11.9391 17.7779 12.0296 17.8436C12.1201 17.9093 12.2222 17.9558 12.3301 17.9802C12.438 18.0046 12.5496 18.0065 12.6582 17.9858C12.7668 17.9651 12.8704 17.9222 12.9629 17.8595C13.0554 17.7969 13.135 17.7159 13.197 17.6211C13.2591 17.5262 13.3023 17.4196 13.3243 17.3073C13.3463 17.1949 13.3465 17.0792 13.325 16.9668C13.3035 16.8544 13.2607 16.7475 13.199 16.6524C12.5138 15.5417 11.5488 14.6465 10.4086 14.0638C11.2788 13.3594 11.8833 12.3606 12.117 11.2413C12.3508 10.1221 12.1989 8.95322 11.6879 7.93817L14.431 6.98905C14.5968 6.93152 14.7409 6.82138 14.843 6.67421C14.9451 6.52703 15 6.35028 15 6.16894C15 5.98759 14.9451 5.81084 14.843 5.66367C14.7409 5.5165 14.5968 5.40636 14.431 5.34882V5.35098ZM7.50089 4.77445L11.5323 6.1711L7.50089 7.56558L3.47294 6.1711L7.50089 4.77445ZM10.5566 10.2068C10.5567 10.6993 10.4462 11.1851 10.2339 11.6256C10.0216 12.0662 9.71337 12.4493 9.33359 12.7447C8.9538 13.0401 8.51293 13.2396 8.04591 13.3275C7.5789 13.4153 7.09858 13.3891 6.64304 13.2508C6.1875 13.1126 5.76927 12.8661 5.42149 12.5309C5.07371 12.1957 4.80594 11.7811 4.63943 11.3199C4.47291 10.8587 4.41222 10.3635 4.46217 9.87374C4.51211 9.38395 4.67132 8.91297 4.92717 8.49813L7.23768 9.29734C7.40845 9.35694 7.59332 9.35694 7.76409 9.29734L10.0746 8.49813C10.3897 9.00799 10.557 9.60109 10.5566 10.2068Z" fill="white"/>
              </svg>
            </div>
          </a>
        </div>
      </div>
    </div>

    <div class="col-12 col-md-6">
      <div class="app-card app-card-stat shadow-sm h-100 bg-info">
        <a href="../department/edit" class="icon-wrapper d-flex align-items-center justify-content-end pt-4 px-4 text-decoration-none">
          <span class="text-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
            </svg>
          </span>
        </a>
        <div class="app-card-body p-3 p-lg-4">
          <h4 class="mb-2 text-white">Bachelor of Science in Multimedia</h4>
          <div class="stats-figure d-flex flex-row align-items-center justify-content-around gap-2">
            <div class="students-info d-flex flex-column align-items-center justify-content-center">
              <h2 class="text-white mt-4">227</h2>
              <p class="text-white fs-6">Total Students</p>
            </div>
            <div class="icon-wrapper">
              <svg width="127" height="75" viewBox="0 0 127 75" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M124.385 23.4299L99.2597 14.1799C98.6162 13.94 97.9193 13.94 97.2759 14.1799L72.1509 23.4299C71.5514 23.6492 71.0256 24.0631 70.6423 24.6174C70.259 25.1717 70.0359 25.8408 70.0021 26.5373C69.9993 26.598 69.9993 26.6588 70.0021 26.7195V49.8445C70.0021 50.7644 70.333 51.6467 70.922 52.2972C71.511 52.9477 72.3098 53.3132 73.1428 53.3132C73.9757 53.3132 74.7745 52.9477 75.3635 52.2972C75.9525 51.6467 76.2834 50.7644 76.2834 49.8445V31.5323L82.4887 33.8159C80.5629 37.8874 79.9906 42.5758 80.8715 47.0651C81.7523 51.5545 84.0305 55.5606 87.3096 58.3863C83.0185 60.7234 79.3869 64.3106 76.8068 68.7607C76.5745 69.1421 76.4131 69.5707 76.3321 70.0216C76.251 70.4725 76.2519 70.9367 76.3347 71.3872C76.4175 71.8377 76.5806 72.2656 76.8144 72.6459C77.0483 73.0262 77.3482 73.3513 77.6968 73.6025C78.0454 73.8536 78.4358 74.0257 78.8451 74.1087C79.2545 74.1918 79.6747 74.1842 80.0814 74.0863C80.4881 73.9884 80.8731 73.8022 81.214 73.5385C81.5549 73.2748 81.845 72.9389 82.0674 72.5503C85.8021 66.2025 91.7248 62.5632 98.2678 62.5632C104.811 62.5632 110.733 66.2025 114.481 72.5503C114.704 72.9389 114.994 73.2748 115.335 73.5385C115.676 73.8022 116.061 73.9884 116.467 74.0863C116.874 74.1842 117.294 74.1918 117.703 74.1087C118.113 74.0257 118.503 73.8536 118.852 73.6025C119.2 73.3513 119.5 73.0262 119.734 72.6459C119.968 72.2656 120.131 71.8377 120.214 71.3872C120.297 70.9367 120.298 70.4725 120.217 70.0216C120.136 69.5707 119.974 69.1421 119.742 68.7607C117.159 64.3054 113.523 60.7149 109.226 58.3776C112.505 55.5519 114.783 51.5458 115.664 47.0564C116.545 42.5671 115.973 37.8787 114.047 33.8073L124.385 30.0003C125.009 29.7695 125.552 29.3278 125.937 28.7374C126.322 28.1471 126.529 27.4382 126.529 26.7108C126.529 25.9834 126.322 25.2744 125.937 24.6841C125.552 24.0938 125.009 23.652 124.385 23.4212V23.4299ZM98.2678 21.1174L113.461 26.7195L98.2678 32.3128L83.0881 26.7195L98.2678 21.1174ZM109.783 42.907C109.784 44.8825 109.367 46.831 108.567 48.5979C107.767 50.3649 106.606 51.9017 105.174 53.0866C103.743 54.2714 102.082 55.0718 100.322 55.4241C98.5618 55.7765 96.7517 55.6712 95.0349 55.1166C93.3182 54.562 91.742 53.5733 90.4314 52.229C89.1207 50.8846 88.1116 49.2215 87.4841 47.3715C86.8566 45.5215 86.6279 43.5355 86.8161 41.571C87.0043 39.6064 87.6043 37.7172 88.5685 36.0533L97.2759 39.259C97.9194 39.498 98.6161 39.498 99.2597 39.259L107.967 36.0533C109.155 38.0984 109.785 40.4773 109.783 42.907Z" fill="white"/>
                <path d="M88.3847 9.42992L63.2597 0.17992C62.6162 -0.0599734 61.9193 -0.0599734 61.2759 0.17992L36.1509 9.42992C35.5514 9.64922 35.0256 10.0631 34.6423 10.6174C34.259 11.1717 34.0359 11.8408 34.0021 12.5373C33.9993 12.598 33.9993 12.6588 34.0021 12.7195V35.8445C34.0021 36.7644 34.333 37.6467 34.922 38.2972C35.511 38.9477 36.3098 39.3132 37.1428 39.3132C37.9757 39.3132 38.7745 38.9477 39.3635 38.2972C39.9525 37.6467 40.2834 36.7644 40.2834 35.8445V17.5323L46.4887 19.8159C44.5629 23.8874 43.9906 28.5758 44.8715 33.0651C45.7523 37.5545 48.0305 41.5606 51.3096 44.3863C47.0185 46.7234 43.3869 50.3106 40.8068 54.7607C40.5745 55.1421 40.4131 55.5707 40.3321 56.0216C40.251 56.4725 40.2519 56.9367 40.3347 57.3872C40.4175 57.8377 40.5806 58.2656 40.8144 58.6459C41.0483 59.0262 41.3482 59.3513 41.6968 59.6025C42.0454 59.8536 42.4358 60.0257 42.8451 60.1087C43.2545 60.1918 43.6747 60.1842 44.0814 60.0863C44.4881 59.9884 44.8731 59.8022 45.214 59.5385C45.5549 59.2748 45.845 58.9389 46.0674 58.5503C49.8021 52.2025 55.7248 48.5632 62.2678 48.5632C68.8107 48.5632 74.7334 52.2025 78.4813 58.5503C78.7036 58.9389 78.9937 59.2748 79.3346 59.5385C79.6756 59.8022 80.0606 59.9884 80.4672 60.0863C80.8739 60.1842 81.2941 60.1918 81.7035 60.1087C82.1129 60.0257 82.5032 59.8536 82.8518 59.6025C83.2004 59.3513 83.5004 59.0262 83.7342 58.6459C83.968 58.2656 84.1311 57.8377 84.2139 57.3872C84.2967 56.9367 84.2976 56.4725 84.2166 56.0216C84.1355 55.5707 83.9741 55.1421 83.7418 54.7607C81.1592 50.3054 77.5228 46.7149 73.2259 44.3776C76.505 41.5519 78.7832 37.5458 79.6641 33.0564C80.5449 28.5671 79.9726 23.8787 78.0468 19.8073L88.3847 16.0003C89.0092 15.7695 89.5523 15.3278 89.9371 14.7374C90.3218 14.1471 90.5289 13.4382 90.5289 12.7108C90.5289 11.9834 90.3218 11.2744 89.9371 10.6841C89.5523 10.0938 89.0092 9.65203 88.3847 9.42125V9.42992ZM62.2678 7.11742L77.4605 12.7195L62.2678 18.3128L47.0881 12.7195L62.2678 7.11742ZM73.7834 28.907C73.7837 30.8825 73.3674 32.831 72.5674 34.5979C71.7674 36.3649 70.6057 37.9017 69.1745 39.0866C67.7432 40.2714 66.0818 41.0718 64.3218 41.4241C62.5618 41.7765 60.7517 41.6712 59.0349 41.1166C57.3182 40.562 55.742 39.5733 54.4314 38.229C53.1207 36.8846 52.1116 35.2215 51.4841 33.3715C50.8566 31.5215 50.6279 29.5355 50.8161 27.571C51.0043 25.6064 51.6043 23.7172 52.5685 22.0533L61.2759 25.259C61.9194 25.498 62.6161 25.498 63.2597 25.259L71.9671 22.0533C73.1547 24.0984 73.7852 26.4773 73.7834 28.907Z" fill="white"/>
                <path d="M54.3847 23.4299L29.2597 14.1799C28.6162 13.94 27.9193 13.94 27.2759 14.1799L2.15086 23.4299C1.55135 23.6492 1.02563 24.063 0.642316 24.6174C0.259004 25.1717 0.035907 25.8408 0.00214766 26.5373C-0.000715886 26.598 -0.000715886 26.6588 0.00214766 26.7195V49.8445C0.00214766 50.7644 0.333034 51.6467 0.922015 52.2972C1.511 52.9477 2.30983 53.3132 3.14277 53.3132C3.97572 53.3132 4.77455 52.9477 5.36353 52.2972C5.95251 51.6467 6.2834 50.7644 6.2834 49.8445V31.5323L12.4887 33.8159C10.5629 37.8874 9.99062 42.5757 10.8715 47.0651C11.7523 51.5545 14.0305 55.5606 17.3096 58.3863C13.0185 60.7234 9.38693 64.3106 6.80684 68.7607C6.57449 69.1421 6.4131 69.5707 6.33206 70.0216C6.25101 70.4725 6.25191 70.9367 6.33472 71.3872C6.41753 71.8377 6.5806 72.2656 6.81443 72.6459C7.04826 73.0261 7.3482 73.3513 7.69682 73.6025C8.04543 73.8536 8.43577 74.0257 8.84513 74.1087C9.2545 74.1918 9.67473 74.1842 10.0814 74.0863C10.4881 73.9884 10.8731 73.8022 11.214 73.5385C11.5549 73.2748 11.845 72.9389 12.0674 72.5503C15.8021 66.2025 21.7248 62.5632 28.2678 62.5632C34.8107 62.5632 40.7334 66.2025 44.4813 72.5503C44.7036 72.9389 44.9937 73.2748 45.3346 73.5385C45.6756 73.8022 46.0606 73.9884 46.4672 74.0863C46.8739 74.1842 47.2941 74.1918 47.7035 74.1087C48.1129 74.0257 48.5032 73.8536 48.8518 73.6025C49.2004 73.3513 49.5004 73.0261 49.7342 72.6459C49.968 72.2656 50.1311 71.8377 50.2139 71.3872C50.2967 70.9367 50.2976 70.4725 50.2166 70.0216C50.1355 69.5707 49.9741 69.1421 49.7418 68.7607C47.1592 64.3054 43.5228 60.7149 39.2259 58.3776C42.505 55.5519 44.7832 51.5458 45.6641 47.0564C46.5449 42.5671 45.9726 37.8787 44.0468 33.8073L54.3847 30.0003C55.0092 29.7695 55.5523 29.3278 55.9371 28.7374C56.3218 28.1471 56.5289 27.4382 56.5289 26.7108C56.5289 25.9834 56.3218 25.2744 55.9371 24.6841C55.5523 24.0938 55.0092 23.652 54.3847 23.4212V23.4299ZM28.2678 21.1174L43.4605 26.7195L28.2678 32.3128L13.0881 26.7195L28.2678 21.1174ZM39.7834 42.907C39.7837 44.8825 39.3674 46.831 38.5674 48.5979C37.7674 50.3649 36.6057 51.9017 35.1745 53.0866C33.7432 54.2714 32.0818 55.0718 30.3218 55.4241C28.5618 55.7765 26.7517 55.6712 25.0349 55.1166C23.3182 54.562 21.742 53.5733 20.4314 52.229C19.1207 50.8846 18.1116 49.2215 17.4841 47.3715C16.8566 45.5215 16.6279 43.5355 16.8161 41.571C17.0043 39.6064 17.6043 37.7172 18.5685 36.0533L27.2759 39.259C27.9194 39.498 28.6161 39.498 29.2597 39.259L37.9671 36.0533C39.1547 38.0984 39.7852 40.4773 39.7834 42.907Z" fill="white"/>
              </svg>
            </div>
          </div>
          <hr>
          <a href="#" class='stats-meta text-success'>
            <div class="d-flex footer-icon align-items-center justify-content-end gap-2">
              <svg width="23" height="26" viewBox="0 0 23 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.5446 21.6667H4.79167V6.50002H2.875V21.6667C2.875 22.2413 3.07693 22.7924 3.43638 23.1988C3.79582 23.6051 4.28333 23.8334 4.79167 23.8334H13.2346C12.8821 23.1687 12.6478 22.4328 12.5446 21.6667ZM18.2083 2.16669H13.4167V7.58335L11.5 5.95835L9.58333 7.58335V2.16669H8.625C8.11667 2.16669 7.62916 2.39496 7.26971 2.80129C6.91027 3.20762 6.70833 3.75872 6.70833 4.33335V17.3334C6.70833 17.908 6.91027 18.4591 7.26971 18.8654C7.62916 19.2717 8.11667 19.5 8.625 19.5H12.5446C12.6841 18.5658 13.0027 17.6773 13.4779 16.8969C13.9531 16.1164 14.5735 15.4629 15.2957 14.9819C16.0178 14.501 16.8242 14.2044 17.6584 14.1128C18.4926 14.0212 19.3345 14.1369 20.125 14.4517V4.33335C20.125 3.75872 19.9231 3.20762 19.5636 2.80129C19.2042 2.39496 18.7167 2.16669 18.2083 2.16669ZM19.1667 16.25V19.5H22.0417V21.6667H19.1667V24.9167H17.25V21.6667H14.375V19.5H17.25V16.25H19.1667Z" fill="white"/>
              </svg>
              <svg width="33" height="18" viewBox="0 0 33 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M32.431 5.35098L25.7641 3.04486C25.5934 2.98505 25.4084 2.98505 25.2377 3.04486L18.5707 5.35098C18.4117 5.40566 18.2722 5.50883 18.1704 5.64703C18.0687 5.78523 18.0095 5.95205 18.0006 6.1257C17.9998 6.14082 17.9998 6.15598 18.0006 6.1711V11.9364C18.0006 12.1658 18.0884 12.3857 18.2447 12.5479C18.4009 12.7101 18.6129 12.8012 18.8339 12.8012C19.055 12.8012 19.2669 12.7101 19.4232 12.5479C19.5795 12.3857 19.6673 12.1658 19.6673 11.9364V7.37101L21.3139 7.94033C20.8029 8.95538 20.651 10.1242 20.8848 11.2435C21.1185 12.3627 21.723 13.3615 22.5931 14.066C21.4545 14.6486 20.4908 15.543 19.8062 16.6524C19.7445 16.7475 19.7017 16.8544 19.6802 16.9668C19.6587 17.0792 19.659 17.1949 19.6809 17.3073C19.7029 17.4196 19.7462 17.5262 19.8082 17.6211C19.8703 17.7159 19.9499 17.7969 20.0424 17.8595C20.1349 17.9222 20.2384 17.9651 20.3471 17.9858C20.4557 18.0065 20.5672 18.0046 20.6751 17.9802C20.783 17.9558 20.8852 17.9093 20.9756 17.8436C21.0661 17.7779 21.1431 17.6941 21.2021 17.5972C22.1931 16.0147 23.7647 15.1073 25.5009 15.1073C27.2371 15.1073 28.8087 16.0147 29.8032 17.5972C29.8622 17.6941 29.9391 17.7779 30.0296 17.8436C30.1201 17.9093 30.2222 17.9558 30.3301 17.9802C30.438 18.0046 30.5496 18.0065 30.6582 17.9858C30.7668 17.9651 30.8704 17.9222 30.9629 17.8595C31.0554 17.7969 31.135 17.7159 31.197 17.6211C31.2591 17.5262 31.3023 17.4196 31.3243 17.3073C31.3463 17.1949 31.3465 17.0792 31.325 16.9668C31.3035 16.8544 31.2607 16.7475 31.199 16.6524C30.5138 15.5417 29.5488 14.6465 28.4086 14.0638C29.2788 13.3594 29.8833 12.3606 30.117 11.2413C30.3508 10.1221 30.1989 8.95322 29.6879 7.93817L32.431 6.98905C32.5968 6.93152 32.7409 6.82138 32.843 6.67421C32.9451 6.52703 33 6.35028 33 6.16894C33 5.98759 32.9451 5.81084 32.843 5.66367C32.7409 5.5165 32.5968 5.40636 32.431 5.34882V5.35098ZM25.5009 4.77445L29.5323 6.1711L25.5009 7.56558L21.4729 6.1711L25.5009 4.77445ZM28.5566 10.2068C28.5567 10.6993 28.4462 11.1851 28.2339 11.6256C28.0216 12.0662 27.7134 12.4493 27.3336 12.7447C26.9538 13.0401 26.5129 13.2396 26.0459 13.3275C25.5789 13.4153 25.0986 13.3891 24.643 13.2508C24.1875 13.1126 23.7693 12.8661 23.4215 12.5309C23.0737 12.1957 22.8059 11.7811 22.6394 11.3199C22.4729 10.8587 22.4122 10.3635 22.4622 9.87374C22.5121 9.38395 22.6713 8.91297 22.9272 8.49813L25.2377 9.29734C25.4085 9.35694 25.5933 9.35694 25.7641 9.29734L28.0746 8.49813C28.3897 9.00799 28.557 9.60109 28.5566 10.2068Z" fill="white"/>
                <path d="M23.431 2.35098L16.7641 0.0448561C16.5934 -0.014952 16.4084 -0.014952 16.2377 0.0448561L9.57073 2.35098C9.41165 2.40566 9.27215 2.50883 9.17044 2.64703C9.06873 2.78523 9.00953 2.95205 9.00057 3.1257C8.99981 3.14082 8.99981 3.15598 9.00057 3.1711V8.93642C9.00057 9.16577 9.08837 9.38574 9.24466 9.54792C9.40094 9.7101 9.61292 9.80121 9.83394 9.80121C10.055 9.80121 10.2669 9.7101 10.4232 9.54792C10.5795 9.38574 10.6673 9.16577 10.6673 8.93642V4.37101L12.3139 4.94033C11.8029 5.95538 11.651 7.12425 11.8848 8.2435C12.1185 9.36274 12.723 10.3615 13.5931 11.066C12.4545 11.6486 11.4908 12.543 10.8062 13.6524C10.7445 13.7475 10.7017 13.8544 10.6802 13.9668C10.6587 14.0792 10.659 14.1949 10.6809 14.3073C10.7029 14.4196 10.7462 14.5262 10.8082 14.6211C10.8703 14.7159 10.9499 14.7969 11.0424 14.8595C11.1349 14.9222 11.2384 14.9651 11.3471 14.9858C11.4557 15.0065 11.5672 15.0046 11.6751 14.9802C11.783 14.9558 11.8852 14.9093 11.9756 14.8436C12.0661 14.7779 12.1431 14.6941 12.2021 14.5972C13.1931 13.0147 14.7647 12.1073 16.5009 12.1073C18.2371 12.1073 19.8087 13.0147 20.8032 14.5972C20.8622 14.6941 20.9391 14.7779 21.0296 14.8436C21.1201 14.9093 21.2222 14.9558 21.3301 14.9802C21.438 15.0046 21.5496 15.0065 21.6582 14.9858C21.7668 14.9651 21.8704 14.9222 21.9629 14.8595C22.0554 14.7969 22.135 14.7159 22.197 14.6211C22.2591 14.5262 22.3023 14.4196 22.3243 14.3073C22.3463 14.1949 22.3465 14.0792 22.325 13.9668C22.3035 13.8544 22.2607 13.7475 22.199 13.6524C21.5138 12.5417 20.5488 11.6465 19.4086 11.0638C20.2788 10.3594 20.8833 9.36058 21.117 8.24133C21.3508 7.12209 21.1989 5.95322 20.6879 4.93817L23.431 3.98905C23.5968 3.93152 23.7409 3.82138 23.843 3.67421C23.9451 3.52703 24 3.35028 24 3.16894C24 2.98759 23.9451 2.81084 23.843 2.66367C23.7409 2.5165 23.5968 2.40636 23.431 2.34882V2.35098ZM16.5009 1.77445L20.5323 3.1711L16.5009 4.56558L12.4729 3.1711L16.5009 1.77445ZM19.5566 7.20682C19.5567 7.69935 19.4462 8.18512 19.2339 8.62564C19.0216 9.06616 18.7134 9.4493 18.3336 9.74471C17.9538 10.0401 17.5129 10.2396 17.0459 10.3275C16.5789 10.4153 16.0986 10.3891 15.643 10.2508C15.1875 10.1126 14.7693 9.86606 14.4215 9.5309C14.0737 9.19573 13.8059 8.78111 13.6394 8.31989C13.4729 7.85867 13.4122 7.36353 13.4622 6.87374C13.5121 6.38395 13.6713 5.91297 13.9272 5.49813L16.2377 6.29734C16.4085 6.35694 16.5933 6.35694 16.7641 6.29734L19.0746 5.49813C19.3897 6.00799 19.557 6.60109 19.5566 7.20682Z" fill="white"/>
                <path d="M14.431 5.35098L7.76409 3.04486C7.59335 2.98505 7.40842 2.98505 7.23768 3.04486L0.570733 5.35098C0.411653 5.40566 0.272152 5.50883 0.170439 5.64703C0.0687269 5.78523 0.00952795 5.95205 0.000569884 6.1257C-0.000189961 6.14082 -0.000189961 6.15598 0.000569884 6.1711V11.9364C0.000569884 12.1658 0.088371 12.3857 0.244658 12.5479C0.400945 12.7101 0.612915 12.8012 0.833938 12.8012C1.05496 12.8012 1.26693 12.7101 1.42322 12.5479C1.57951 12.3857 1.66731 12.1658 1.66731 11.9364V7.37101L3.3139 7.94033C2.80288 8.95538 2.65102 10.1242 2.88475 11.2435C3.11849 12.3627 3.72301 13.3615 4.59312 14.066C3.45448 14.6486 2.49083 15.543 1.8062 16.6524C1.74455 16.7475 1.70172 16.8544 1.68022 16.9668C1.65871 17.0792 1.65895 17.1949 1.68093 17.3073C1.7029 17.4196 1.74617 17.5262 1.80822 17.6211C1.87026 17.7159 1.94985 17.7969 2.04236 17.8595C2.13487 17.9222 2.23844 17.9651 2.34707 17.9858C2.45569 18.0065 2.5672 18.0046 2.67511 17.9802C2.78302 17.9558 2.88518 17.9093 2.97564 17.8436C3.06611 17.7779 3.14309 17.6941 3.20209 17.5972C4.19311 16.0147 5.7647 15.1073 7.50089 15.1073C9.23707 15.1073 10.8087 16.0147 11.8032 17.5972C11.8622 17.6941 11.9391 17.7779 12.0296 17.8436C12.1201 17.9093 12.2222 17.9558 12.3301 17.9802C12.438 18.0046 12.5496 18.0065 12.6582 17.9858C12.7668 17.9651 12.8704 17.9222 12.9629 17.8595C13.0554 17.7969 13.135 17.7159 13.197 17.6211C13.2591 17.5262 13.3023 17.4196 13.3243 17.3073C13.3463 17.1949 13.3465 17.0792 13.325 16.9668C13.3035 16.8544 13.2607 16.7475 13.199 16.6524C12.5138 15.5417 11.5488 14.6465 10.4086 14.0638C11.2788 13.3594 11.8833 12.3606 12.117 11.2413C12.3508 10.1221 12.1989 8.95322 11.6879 7.93817L14.431 6.98905C14.5968 6.93152 14.7409 6.82138 14.843 6.67421C14.9451 6.52703 15 6.35028 15 6.16894C15 5.98759 14.9451 5.81084 14.843 5.66367C14.7409 5.5165 14.5968 5.40636 14.431 5.34882V5.35098ZM7.50089 4.77445L11.5323 6.1711L7.50089 7.56558L3.47294 6.1711L7.50089 4.77445ZM10.5566 10.2068C10.5567 10.6993 10.4462 11.1851 10.2339 11.6256C10.0216 12.0662 9.71337 12.4493 9.33359 12.7447C8.9538 13.0401 8.51293 13.2396 8.04591 13.3275C7.5789 13.4153 7.09858 13.3891 6.64304 13.2508C6.1875 13.1126 5.76927 12.8661 5.42149 12.5309C5.07371 12.1957 4.80594 11.7811 4.63943 11.3199C4.47291 10.8587 4.41222 10.3635 4.46217 9.87374C4.51211 9.38395 4.67132 8.91297 4.92717 8.49813L7.23768 9.29734C7.40845 9.35694 7.59332 9.35694 7.76409 9.29734L10.0746 8.49813C10.3897 9.00799 10.557 9.60109 10.5566 10.2068Z" fill="white"/>
              </svg>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
</x-authenticated_layout>
