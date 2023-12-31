class Solution {
    public int[] intersect(int[] nums1, int[] nums2) {
        Arrays.sort(nums1);
        Arrays.sort(nums2);
        int n=nums1.length;
        int m=nums2.length;
        int i=0,j=0;
        ArrayList<Integer>list=new ArrayList<>();
        while(i <n && j < m)
        {
            if(nums1[i] == nums2[j])
            {
                list.add(nums1[i]);
                i++;
                j++;
            }
            else if(nums1[i] > nums2[j])
            {
                j++;
            }
            else{
                i++;
            }
        }
        int []result=new int[list.size()];
        i=0;
        for(int x:list)
        {
            result[i]=x;
            i++;
        }
        return result;
    }
}